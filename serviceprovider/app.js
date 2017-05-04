/**
 * Created by Benedict on 4 May 2017.
 */
var express = require('express')
var app = express()
var path = require('path');

app.use(express.static('public'))

app.listen(3000, function() {
    console.log('Example app listening on port 3000!')
});

var mysql = require('mysql')
var connection = mysql.createConnection({
    host    : 'localhost',
    user    : 'dbuser',
    password: 's3kreee7',
    database: 'my_db'
});

connection.connect();

connection.query('SELECT 1 + 1 AS solution', function (err, rows, fields) {
    if (err) throw err

    console.log('The solution is: ', rows[0].solution)
})

conneciton.end();