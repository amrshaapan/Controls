import Vue from 'vue';
import Vuex from 'vuex'
import axios from 'axios'
Vue.use(Vuex)

export const store = new Vuex.Store({
  state: {
    data_vendor: '',

  },
  getters: {

  },
    actions: {

        formSearchVendor({ commit }, payload) {
        axios
          .post('/get_data_vendor_by_id', {
            id:payload.id

          }).then(response => {
              commit('SET_VENDORE_DATA', response.data)
          }).catch(err => {
                //    console.log(err.response.data);
                   if (err.response.status == 422) {
                    this.errors = err.response.data.errors;
                }
          });
      }

  },
  mutations: {

    SET_VENDORE_DATA(state, data) {
      state.data_vendor = data
    }
  }
})




// inbox: state => {
//     // return state.inbox[3].Rec_section_id

//     // return JSON.parse(JSON.stringify(state.inbox[3].Rec_section_id))
//     return JSON.parse(state.inbox[5].send_section_id)
//   }

    // getInboxData({ commit }) {
    //   axios.get('/get_all_data')
    //     .then(response => {
    //       commit('SET_INBOX_DATA', response.data)
    //     })
    // },
    // getUserData({ commit }) {
    //   axios.get('/get_user_data')
    //     .then(response => {
    //       commit('SET_USER_DATA', response.data)
    //     })
    // }
