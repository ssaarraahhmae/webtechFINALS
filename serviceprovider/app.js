/**
 * Created by Benedict on 4 May 2017.
 */
var express = require('express')
var app = express()
var path = require('path');
/*
app.use(express.static('public'))
*/

var myLogger = function (req, res, next) {
	console.log('Time: ', Date.now())
	next()
}

app.use(myLogger)

app.get('/', function(req, res) {
	res.send('Hello World!')
})

app.listen(3000, function() {
    console.log('Example app listening on port 3000!')
});


var mysql = require('mysql')
var connection = mysql.createConnection({
    host    : 'localhost',
    user    : 'root',
    password: '',
    database: 'serviceprovider'
});

connection.connect(function(err) {
	if (err) throw err
	console.log('You are now connected...')
});

connection.query('SELECT * FROM spinfo', function (err, rows, fields) {
    if (err) throw err

    console.log('The solution is: ', rows[1].name)
})

connection.end();
