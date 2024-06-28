const express = require('express')
const app = express();

app.get('/', (req, res) => {
    res.send('Welcome')})

app.get('/about', (req, res) => {
    res.send('About this')})

app.listen(8000)