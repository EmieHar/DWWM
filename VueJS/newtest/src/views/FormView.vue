<template>
    <div >
        <label for="titre">Titre du ghibli:</label> <br>
      <input name="titre" type="text" v-model='titre'/><br>
      <label for="description">Description du ghibli:</label> <br>
      <input name="description" type="text" v-model="description"/><br>
      <button @click="envoi()">envoyer</button>
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import axios from 'axios';
  
  export default {
    name: 'FormView',
    data: function(){
      return{
        titre: "",
        description: "",
      }
    },
    methods:{
      envoi: function(){
        axios.post("http://localhost:8082/ghibli/create", {titre: this.titre, description: this.description})
        .then(response => console.log(response.data))
      }
    }
  }
  </script>
  
  