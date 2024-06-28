<template>
  <div class="home">
    <h1>{{ message }}</h1>
    <h2>{{ $store.state.nom }}</h2>
    <h3>{{ $store.state.counter }}</h3>
    <p v-for="(item, index) in infos" v-bind:key="index">
      {{index }} :  {{ item.description }} ( <span v-html="item.symbol" ></span> )
      </p>

      <FormView2></FormView2>
  </div>
</template>

<script>
// @ is an alias to /src
import axios from "axios";
import FormView2 from './FormView2.vue';

export default {
  name: 'DeviseView',
  components:{
    FormView2
  },
  data: function() {
    return {
      message: "Bienvenue",
      infos: null,
    }
  },
  mounted: function(){
    
    axios.get('https://api.coindesk.com/v1/bpi/currentprice.json')
    .then((response) => 
    {this.infos = response.data.bpi})
  }
}
</script>
