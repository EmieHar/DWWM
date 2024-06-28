<template>
  <div >
    <input type="text" v-model='nom'/>
    <input type="text" v-model="prenom"/>
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
      nom: "",
      prenom: "",
    }
  },
  methods:{
    envoi: function(){
      axios.post("http://localhost/VueJs/test/postjson.php", {nom: this.nom, prenom: this.prenom})
      .then(response => console.log(response.data))
    }
  }
}
</script>
