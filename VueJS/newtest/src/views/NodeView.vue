<template>
    <div v-for="(item, index) in infos" v-bind:key="index">
       <h1> TITRE: {{ item.title }} </h1>
       <h2> Titre original: {{ item.original_title }} /<br>
        {{item.original_title_romanised}} </h2>
        <a href="{{ item.url}}">url: {{item.url}}</a>
        <p><em>{{ item.description }} </em></p>
        <hr>
       </div>
</template>
  
<script>

import axios from "axios";

export default {
    name: 'AxiosView',
    data: function () {
        return {
            message: "Bienvenue",
            infos: [],

        }
    },
    mounted: function () {
        axios.get('http://localhost:8082/ghibli')
            .then((response) => { this.infos = response.data.films })
    }

}
</script>
  