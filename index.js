var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
const path = require('path');
const port = process.env.PORT || 3000;

const mysql = require('mysql');

app.get('/', function(req, res){
    const filePath = path.join(__dirname, 'test.html');
    res.sendFile(filePath);
});

let max = 3;
let min = 1;

io.on('connection', function(socket){
    console.log('A user connected');
    const generateRandomNumber = () => {

    const randomNumber = Math.random() * max;

    const roundedRandomNumber = randomNumber + min;

    const finalRandomNumber = roundedRandomNumber.toFixed(2);

    return finalRandomNumber;
    };

    const startProgram = () => {

        setTimeout(function(){
            socket.emit('working', '1');
        }, 1000);
        setTimeout(function(){
            socket.emit('prepareplane', '6');
        }, 1000);
        setTimeout(function(){
            socket.emit('flyplane', '7');
        }, 1000);
    
        var x = 0;
        setTimeout(function(){
            const randomNumber = generateRandomNumber();
            const myInterval = setInterval(function(){
                x = parseFloat((x + 0.01).toFixed(2));
                socket.emit('crash-update', x.toFixed(2));
                if (x >= randomNumber) {
                    clearInterval(myInterval);
                    socket.emit('updatehistory', x);
                    socket.emit('reset', x);
                    setTimeout(function(){
                        socket.emit('removecrash', x);
                        max = 3;
                        setTimeout(startProgram, 5000);
                    }, 3000);
                }
            }, 100);
        }, 2000);
    };
    
    startProgram();

   socket.on('disconnect', function () {
      console.log('A user disconnected');
   });
   socket.on('newBet', function (s, t) {

        const connectiona = mysql.createConnection({
        host: 'localhost',
        user: 'flypcoin_gm',
        password: 'flypcoin_gm',
        database: 'flypcoin_gm'
        });
      
      const checkbalanceQuery = 'SELECT * FROM users WHERE username = ?';
      
      connectiona.query(checkbalanceQuery, [s], function (error, userResults) {
        if (error) {
          console.error('Error executing query:', error);
          return;
        }
        
        if (userResults.length === 0) {
          console.error('User not found');
          return;
        }
        
        const balance = userResults[0].balance;
        const newbalance = (balance - t).toFixed(2);
        
        const updateQuery = 'UPDATE users SET balance = ? WHERE username = ?';
        connectiona.query(updateQuery, [newbalance, s], function (error, updateResults) {
          if (error) {
            console.error('Error updating data:', error);
            return;
          }
          console.log('User balance updated successfully');
          
          const insertQuery = 'INSERT INTO crashbetrecord (username, amount) VALUES (?, ?)';
          connectiona.query(insertQuery, [s, t], function (error, insertResults) {
            if (error) {
              console.error('Error inserting data:', error);
              return;
            }
            console.log('Data inserted into crashbetrecord successfully');
            
			let xc = 1;
            const maxcrashQuery = 'SELECT * FROM crashgamerecordtwo WHERE id = ?';
            connectiona.query(maxcrashQuery, [xc], function (error, maxcrashResults) {
                if (error) {
                  console.error('Error executing query:', error);
                  return;
                }
                max = maxcrashResults[0].crashpoint;
                connectiona.end();
              });
          });
        });
      });
    });
    socket.on('addWin', function (s, t, e) {

        const connectionb = mysql.createConnection({
        host: 'localhost',
        user: 'flypcoin_gm',
        password: 'flypcoin_gm',
        database: 'flypcoin_gm'
        });
        
        const checkbalanceQueryz = 'SELECT * FROM users WHERE username = ?';
      
        connectionb.query(checkbalanceQueryz, [s], function (error, userResultsz) {
        if (error) {
          console.error('Error executing query:', error);
          return;
        }
        
        if (userResultsz.length === 0) {
          console.error('User not found');
          return;
        }
        
        const balancez = userResultsz[0].balance;
        const newbalancez = (balancez + t * e).toFixed(2);
        
            const updateQueryz = 'UPDATE users SET balance = ? WHERE username = ?';
            connectionb.query(updateQueryz, [newbalancez, s], function (error, updateResultsz) {
              if (error) {
                console.error('Error updating data:', error);
                return;
              }
              console.log('User balance updated successfully');
              
                var suc = 'success';
                const updatecrashQueryz = 'UPDATE crashbetrecord SET status = ?, winpoint = ? WHERE username = ? ORDER BY id DESC LIMIT 1';
                connectionb.query(updatecrashQueryz, [suc, e, s], function (error, updateResultsz) {
                  if (error) {
                    console.error('Error updating data:', error);
                    return;
                  }
                  console.log('Crash Bet Record updated successfully');
                    connectionb.end();
                });
            });
        });
    });

});

http.listen(port, function(){
   console.log('listening on *:${port}');
});
