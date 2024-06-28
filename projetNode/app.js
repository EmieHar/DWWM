
const Thing = require('./models/thing');

const express = require('express');
const app = express();
const mysql =require('mysql2');

const path = require('path');
app.use('/images', express.static(path.join(__dirname, 'images')));

const cors = require('cors');
app.use(cors());

app.use(express.json());
const connexion = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password : '',
    database: 'projet',
});
// const mongoose = require('mongoose');

// mongoose.connect("mongodb://127.0.0.1/projet", {})

const stuffRoutes = require('./routes/stuff');
app.use('/api/stuff', stuffRoutes);

const userRoutes = require('./routes/user');
app.use('/api/stuff', stuffRoutes);
app.use('/api/auth', userRoutes);



module.exports = app;




