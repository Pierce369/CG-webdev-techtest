var express = require('express');
var app = express();
const fs = require('fs').promises;

const host = 'localhost';
const port = 8000;

let json = require(__dirname + "/landscapes.json");

app.get('/', function (req, res) {
    fs.readFile(__dirname + "/index.html")
        .then(contents => {
            res.setHeader("Content-Type", "text/html");
            res.writeHead(200);
            res.end(contents);
        })
        .catch(err => {
            res.writeHead(500);
            res.end(err);
            return;
    });
})

app.get('/landscapes', function (req, res) {
    res.setHeader("Content-Type", "application/json");
    res.writeHead(200);
    res.end(JSON.stringify(json));
 })


var server = app.listen(port, function () {
    console.log("Server is running on http://%s:%s", host, port)
})

