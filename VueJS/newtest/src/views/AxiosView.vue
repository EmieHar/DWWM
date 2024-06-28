<template>
  <div class="axios">
    <h1>{{ message }}</h1>
    <p>Sélectionner le numéro d'utilisateur pour afficher les données: </p>
    <input type="number" v-model="user">
    
    <p v-for="(item, index) in filtre" v-bind:key="index">
      {{ item.id }} <br> <strong>TITRE: {{ item.title }}</strong> <br> <em> </em>
    </p>
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
      user: ""
    }
  },
  mounted: function () {
    axios.get('https://jsonplaceholder.typicode.com/posts')
      .then((response) => { this.infos = response.data })
  },

  computed: {
    filtre() {
      return this.infos.filter((x) => x.userId == this.user)

    }

  }
}
</script>
