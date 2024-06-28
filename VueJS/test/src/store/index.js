import { createStore } from 'vuex'

export default createStore({
  state() {
    return {
      nom: "smith",
      prenom: "john",
      age: 33,
      counter:0,
      cpt2:0
    }
  },
  getters: {
  },
  mutations: {
    incremente(state) { state.counter++},
    INCREASE_COUNT(state, amount) { state.cpt2 += amount},
    DECREASE_COUNT(state, amount) { state.cpt2 -= amount},
  },
  actions: {
    ajoute1(context) { context.commit('incremente') },
    updateCount(context,payload){
      if(payload.signe == '+'){
        context.commit('INCREASE_COUNT',payload.amount)
      } else {
        context.commit('DECREASE_COUNT',payload.amount)
      }
    }
  },
  modules: {
  }
})
