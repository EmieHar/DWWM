<template>
  <div class="about">
    <h1>This is an about page</h1>
    <DeviseView></DeviseView>
    <br>
    
    <input type="text" v-model="signe">
    <input type="number" v-model="cpt"><br>
    <button @click="inc()">Opération</button>
  <p>Résultat: {{ $store.state.cpt2 }}</p>
  <br>{{ $store.state.counter }}
    <button @click="incremente()">+1</button>
    <FormView></FormView>
  </div>
</template>

<script>
import DeviseView from '@/views/DeviseView.vue'
import FormView from './FormView.vue';

export default{
  components: {
    DeviseView,
    FormView,
  },
  data: function(){
    return {
      cpt:0,
      signe:'+'
    }
  },
  methods: {
    incremente: function() {
      this.$store.dispatch('ajoute1')
    },
    inc: function(){
      this.$store.dispatch('updateCount', { signe: this.signe, amount: this.cpt})
    },
  }
}
</script>

<style scoped>
h1 {color: red;}
</style>

