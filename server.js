const http = require('http');
const socketIO = require('socket.io');
const mysql = require('mysql');

const port = process.env.PORT || 3003;

const server = http.createServer();
const io = socketIO(server);
var crashPosition = 1;
var finalcrash = 0;
var fly;
var betamount =0;
var clients = [];

// Establish MySQL database connection using environment variables
var db_config = {
  host: process.env.DB_HOST || 'localhost',
  user: process.env.DB_USER || 'flypcoin_gm',
  password: process.env.DB_PASSWORD || 'flypcoin_gm',
  database: process.env.DB_NAME || 'flypcoin_gm',
  keepAlive: true,
};

let connection;

function handleDisconnect() {
  connection = mysql.createConnection(db_config);

  connection.connect(function (err) {
    if (err) {
      console.log('Error when connecting to db:', err);
      setTimeout(handleDisconnect, 2000);
    }
  });

  connection.on('error', function (err) {
    if (err.code === 'PROTOCOL_CONNECTION_LOST') {
      handleDisconnect();
    } else {
      throw err;
    }
  });
}

function deleteAndAddId() {
  const deleteQuery = `DELETE FROM bet`;
  connection.query(deleteQuery, (err, result) => {
    if (err) {
      console.error('Error deleting records:', err);
    } else {
      const insertQuery = `INSERT INTO bet (id) VALUES (1)`;
      connection.query(insertQuery, (err, result) => {
        if (err) {
          console.error('Error adding ID:', err);
        } 
      });
    }
  });
}

setInterval(deleteAndAddId, 5000);

handleDisconnect();

function setcrash() {
  const query23 = `SELECT nxt FROM aviset WHERE id =1`;
  connection.query(query23, (err, result) => {
    if (err) {
      console.error('Error adding record to database:', err);
    } else {
      nxtcrash = result[0].nxt;
      if (nxtcrash == 0) {
        const query9 = `SELECT SUM(amount) AS total FROM crashbetrecord WHERE status ='pending'`;
        connection.query(query9, (err, result) => {
          if (err) {
            console.error('Error adding record to database:', err);
          } else {
            betamount = result[0].total || 0;
            if (betamount == 0) {
              finalcrash = Math.floor(Math.random() * 6) + 2;
              repeatupdate(200);
            } else if (betamount <= 100) {
              finalcrash = (Math.random() * 0.5 + 1).toFixed(2); 
              repeatupdate(300);
            } else {
              finalcrash = (Math.random() * 0.5 + 1).toFixed(2); 
              repeatupdate(200);
            }
          }
        });
      } else {
        finalcrash = parseFloat(nxtcrash);
        repeatupdate(200);
        const query36 = `UPDATE aviset SET nxt = 0 WHERE id = 1`;
        connection.query(query36, (err, result) => {
          if (err) {
            console.error('Error adding record to database:', err);
          } 
        });
      }
    }
  });
}

function restartplane() {
  clearInterval(fly);
  const query5 = `INSERT INTO crashgamerecord (crashpoint) VALUES ('${crashPosition}')`;
  connection.query(query5, (err, result) => {
    if (err) {
      console.error('Error adding record to database:', err);
    } 
  });
  io.emit('updatehistory', crashPosition);

  setTimeout(() => {
    const query4 = `UPDATE crashbetrecord SET status = 'fail',winpoint='${crashPosition}' WHERE status = 'pending'`;
    connection.query(query4, (err, result) => {
      if (err) {
        console.error('Error adding record to database:', err);
      } 
    });
    io.volatile.emit('reset', 'resetting plane.....');
  }, 200);

  setTimeout(() => {
    io.emit('removecrash');
    setTimeout(() => {
      io.emit('prepareplane');
      crashPosition = 0.99;
      io.emit('flyplane');
      setTimeout(() => {
        setcrash();
      }, 1000);
    }, 4000);
  }, 3000);
}

function updateCrashInfo() {
  var fc = parseFloat(finalcrash);
  var cp = parseFloat(crashPosition);
  if (fc > cp) {
    crashPosition = (parseFloat(crashPosition) + 0.01).toFixed(2);
    io.emit('crash-update', crashPosition);
  } else {
    restartplane();
  }
}

function repeatupdate(duration) {
  fly = setInterval(updateCrashInfo, duration);
}

io.on('connection', (socket) => {
  clients.push(socket.id);
  socket.emit('working', 'ACTIVE...!');

  socket.on('disconnect', () => {});

  socket.on('newBet', function (username, amount) {
    const bal = `SELECT balance From users WHERE username = '${username}'`;
    connection.query(bal, (err, result) => {
      if (err) {
        console.error('Error adding record to database:', err);
      } else {
        if (result[0].balance > amount) {
          const query1 = `UPDATE users SET balance = balance - ${amount} WHERE username = '${username}'`;
          connection.query(query1, (err, result) => {
            if (err) {
              console.error('Error adding record to database:', err);
            } 
          });
          const query = `INSERT INTO crashbetrecord (username, amount) VALUES ('${username}', ${amount})`;
          connection.query(query, (err, result) => {
            if (err) {
              console.error('Error adding record to database:', err);
            } 
          });
        }
      }
    });
  });

  socket.on('addWin', function (username, amount, winpoint) {
    const bets = `SELECT SUM(amount) AS bets FROM crashbetrecord WHERE status ='pending' AND username = '${username}'`;
    connection.query(bets, (err, result) => {
      if (err) {
        console.error('Error adding record to database:', err);
      } else {
        if (result[0].bets > 0) {
          var winamount = parseFloat((amount * 98 / 100) * winpoint);
          winamount = winamount.toFixed(2);
          const query2 = `UPDATE users SET balance = balance + ${winamount} WHERE username = '${username}'`;
          connection.query(query2, (err, result) => {
            if (err) {
              console.error('Error adding record to database:', err);
            }
          });
          const query3 = `UPDATE crashbetrecord SET status = 'success', winpoint='${winpoint}' WHERE username = '${username}' AND status = 'pending'`;
          connection.query(query3, (err, result) => {
            if (err) {
              console.error('Error adding record to database:', err);
            } 
          });
        }
      }
    });
  });
});

setcrash();
server.listen(port, () => {
  console.log(`Server running at :${port}/`);
});
