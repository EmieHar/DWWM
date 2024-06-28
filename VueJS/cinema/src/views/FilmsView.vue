<template>
    <div>
      <h1>Liste des films </h1>
  
      <h2>{{message}}:</h2>
  
          <div v-for="(item, index) in films" v-bind:key="index" >
  
          <h3> id : {{ item.id }} </h3> <br> 
          <h1> title : {{ item.titrefilm }} </h1> <br> 
          <h2>Director: {{item.directorlastname}} {{item.directorfirstname}}</h2>
          <div>
            <h2>Acteurs:</h2>  
            <h2 v-for="(i,index) in item.actors" v-bind:key="index"> {{i.firstname}} {{i.lastname}} </h2>
          </div>
        
          <h2>{{item.legenre}}</h2>
          <p>description : {{ item.descriptions }} </p>
          <p>duration: {{item.duration}} minutes</p>
          <p>date de sortie: {{item.date}} </p>
          <!-- <img v-bind:src="{{item.coverimage}}"> -->
  
          <hr>
          </div>
    
  
    </div>
  </template>
  
  
  <script>
  
  import axios from 'axios';
  
  export default {
    name: 'ListeFilms',
    data() {
      return {
        message: "voici les films",
        films: []
      }
    },
    mounted: function() {
      axios.get('http://localhost:8082/films')
        .then((response) => {
          this.films = response.data.ok
        })
    }
  
  }
  
  </script>