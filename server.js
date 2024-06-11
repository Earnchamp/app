const http = require('http');
const socketIO = require('socket.io');
const mysql = require('mysql');
const express = require('express');
const path = require('path');

const hostname = 'localhost';
const port = process.env.PORT || 3003;

const app = express();
const server = http.createServer(app);
const io = socketIO(server);

let crashPosition = 1;
let finalcrash = 0;
let fly;
let betamount = 0;
let clients = [];

// MySQL database configuration
const db_config = {
  host: 'localhost',
  user: 'flypcoin_gm',
  password: 'flypcoin_gm',
  database: 'flypcoin_gm',
  keepAlive: true,
};

let connection;

// Function to handle MySQL disconnection and reconnection
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

handleDisconnect();

// Function to set crash point
function setCrashPoint() {
  const query = `SELECT nxt FROM aviset WHERE id = 1`;
  connection.query(query, (err, result) => {
    if (err) {
      console.error('Error fetching next crash point:', err);
    } else {
      const nxtcrash = result[0].nxt;
      if (nxtcrash == 0) {
        const query = `SELECT SUM(amount) AS total FROM crashbetrecord WHERE status = 'pending'`;
        connection.query(query, (err, result) => {
          if (err) {
            console.error('Error fetching total bet amount:', err);
          } else {
            betamount = result[0].total || 0;

            if (betamount == 0) {
              finalcrash = Math.floor(Math.random() * 6) + 2;
              updateCrashInterval(200);
            } else if (betamount <= 100) {
              finalcrash = (Math.random() * 0.5 + 1).toFixed(2);
              updateCrashInterval(300);
            } else {
              finalcrash = (Math.random() * 0.5 + 1).toFixed(2);
              updateCrashInterval(200);
            }
          }
        });
      } else {
        finalcrash = parseFloat(nxtcrash);
        updateCrashInterval(200);
        const updateQuery = `UPDATE aviset SET nxt = 0 WHERE id = 1`;
        connection.query(updateQuery, (err) => {
          if (err) {
            console.error('Error resetting next crash point:', err);
          }
        });
      }
    }
  });
}

// Function to reset the plane
function resetPlane() {
  clearInterval(fly);
  const insertQuery = `INSERT INTO crashgamerecord (crashpoint) VALUES ('${crashPosition}')`;
  connection.query(insertQuery, (err) => {
    if (err) {
      console.error('Error inserting crash point:', err);
    }
  });
  io.emit('updatehistory', crashPosition);

  setTimeout(() => {
    const updateQuery = `UPDATE crashbetrecord SET status = 'fail', winpoint='${crashPosition}' WHERE status = 'pending'`;
    connection.query(updateQuery, (err) => {
      if (err) {
        console.error('Error updating crash bet record:', err);
      }
    });
    io.volatile.emit('reset', 'resetting plane...');
  }, 200);

  setTimeout(() => {
    io.emit('removecrash');
    setTimeout(() => {
      io.emit('prepareplane');
      crashPosition = 0.99;
      io.emit('flyplane');
      setTimeout(setCrashPoint, 1000);
    }, 4000);
  }, 3000);
}

// Function to update crash multiplier
function updateCrashInfo() {
  if (parseFloat(finalcrash) > parseFloat(crashPosition)) {
    crashPosition = (parseFloat(crashPosition) + 0.01).toFixed(2);
    io.emit('crash-update', crashPosition);
  } else {
    resetPlane();
  }
}

// Function to repeatedly update crash data
function updateCrashInterval(duration) {
  fly = setInterval(updateCrashInfo, duration);
}

// Express route to serve the HTML file
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'test.html'));
});

// Socket.io connection handling
io.on('connection', (socket) => {
  clients.push(socket.id);
  socket.emit('working', 'ACTIVE...!');

  socket.on('disconnect', () => {
    clients = clients.filter((clientId) => clientId !== socket.id);
  });

  socket.on('newBet', (username, amount) => {
    const balanceQuery = `SELECT balance FROM users WHERE username = ?`;
    connection.query(balanceQuery, [username], (err, result) => {
      if (err) {
        console.error('Error fetching user balance:', err);
      } else if (result[0] && result[0].balance >= amount) {
        const updateBalanceQuery = `UPDATE users SET balance = balance - ? WHERE username = ?`;
        connection.query(updateBalanceQuery, [amount, username], (err) => {
          if (err) {
            console.error('Error updating user balance:', err);
          }
        });
        const insertBetQuery = `INSERT INTO crashbetrecord (username, amount) VALUES (?, ?)`;
        connection.query(insertBetQuery, [username, amount], (err) => {
          if (err) {
            console.error('Error inserting bet record:', err);
          }
        });
      }
    });
  });

  socket.on('addWin', (username, amount, winpoint) => {
    const betsQuery = `SELECT SUM(amount) AS bets FROM crashbetrecord WHERE status = 'pending' AND username = ?`;
    connection.query(betsQuery, [username], (err, result) => {
      if (err) {
        console.error('Error fetching bet amount:', err);
      } else if (result[0] && result[0].bets > 0) {
        const winAmount = ((amount * 0.98) * winpoint).toFixed(2);
        const updateBalanceQuery = `UPDATE users SET balance = balance + ? WHERE username = ?`;
        connection.query(updateBalanceQuery, [winAmount, username], (err) => {
          if (err) {
            console.error('Error updating user balance:', err);
          }
        });
        const updateBetRecordQuery = `UPDATE crashbetrecord SET status = 'success', winpoint = ? WHERE username = ? AND status = 'pending'`;
        connection.query(updateBetRecordQuery, [winpoint, username], (err) => {
          if (err) {
            console.error('Error updating bet record:', err);
          }
        });
      }
    });
  });
});

setCrashPoint();
server.listen(port, () => {
  console.log(`Server running at :${port}/`);
});
