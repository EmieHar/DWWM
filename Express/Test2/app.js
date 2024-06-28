//chargement des modules
const express = require('express');
const fs = require('fs-extra');
const app =express();
const jsonfile = require('jsonfile');

const cors = require('cors');

//middleware
app.use(cors());

app.use(express.urlencoded({ extended:true }));
app.use(express.json());

app.get('/', function(req,res){
    let donnees = jsonfile.readFileSync('ghibli.json');
    res.json({ok:donnees});
})

app.get('/ghibli', function(req,res){
    fs.readFile("ghibli.json", function(err,films){
        var ret = JSON.parse(films)
            res.json({films:ret});
    })
});

//pour récupérer 1 parmaetre du request.
app.get('/ghibli/:id', function(req,res){
    fs.readFile("ghibli.json", function(err,films){
    console.log(req.params.id)
    var ret = JSON.parse(films)
    res.json({ id:req.params.id, films:ret})
    });
});


app.post('/ghibli/create', function(req, res){
    console.log(req.body)
    res.json({'ok':true})
});

app.listen(8082,()=>console.log('le serveur écoute le port: 8082'));