<template>
    <div>
      <h1>Liste des films </h1>
  
      <h2>{{ message }}:</h2>
      <input type="number" v-model="input">
      <button @click="filtred()" v-bind:key="index">Sélectionner</button>
      
      <div v-for="(item, index) in films" v-bind:key="index">
        <div v-for="(item, index) in filtred" v-bind:key="index">
  
          <h3> id : {{ item.id }} </h3> <br> 
          <h1> title : {{ item.title }} </h1> <br> 
          <h2>Director: {{item.directlastname}} {{item.directfirstname}}</h2>
          
          <h2>{{item.legenre}}</h2>
          <p>description : {{ item.description }} </p>
          <p>duration: {{item.duration}} minutes</p>
          <p>date de sortie: {{item.date}} </p>
          <img src="{{item.coverimage}}">
  
        </div>
      </div>
    </div>
  </template>
  
  
  <script>
  
  import axios from 'axios';
  
  export default {
    name: 'ModifFilm',
    data() {
      return {
        message: "Sélectionner le film à modifier",
        films: [],
        input: null,
      }
    },
    computed: {
      filtred() {
        return this.films.filter( (x) => x.id == this.input )
      }
    },
    mounted: function () {
      axios.get('http://localhost:8082/films')
        .then((response) => {
          this.films = response.data
        })
    }
  
  }
  
  </script>