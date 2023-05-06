//Import the mysql module
const mysql = require('mysql');

//Create a connection pool with the user details
const connectionPool = mysql.createPool({
    connectionLimit: 1,
    host: "localhost",
    user: "root",
    password: "root",
    database: "my_database",
    debug: false
});

connectionPool.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
  });

