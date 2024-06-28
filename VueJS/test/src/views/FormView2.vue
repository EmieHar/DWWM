<template>
  <div>
    <label for="Jack">Jack</label>
    <input type="checkbox" value="Jack" id="Jack" v-model="noms" />

    <br>
    <label for="Jo">Jo</label>
    <input type="checkbox" value="Jo" id="Jo" v-model="noms" />

    <br>
    <label for="Jayce">Jayce</label>
    <input type="checkbox" value="Jayce" id="Jayce" v-model="noms" />

    <br>

    <button @click="envoi()">envoyer</button>
  </div>
</template>

<script>


export default {
  name: 'FormView2',
  data: function () {
    return {
      noms: []
    }
  },
  methods: {
    envoi: function () { console.log(this.noms) }
  }
}

</script>
