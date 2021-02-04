// Vue.component('modal',{ //modal
//     template:`
//       <transition
//                 enter-active-class="animated rollIn"
//                      leave-active-class="animated rollOut">
//     <div class="modal is-active" >
//   <div class="modal-card border border border-secondary">
//     <div class="modal-card-head text-center bg-dark">
//     <div class="modal-card-title text-white">
//           <slot name="head"></slot>
//     </div>
// <button class="delete" @click="$emit('close')"></button>
//     </div>
//     <div class="modal-card-body">
//          <slot name="body"></slot>
//     </div>
//     <div class="modal-card-foot" >
//       <slot name="foot"></slot>
//     </div>
//   </div>
// </div>
// </transition>
//     `
// })


// import $ from 'jquery';
// window.$ = window.jQuery = $;
import axios from 'axios';
import moment from 'moment';
import swal from 'sweetalert';
import vSelect from 'vue-select';
import VueResouerce from 'vue-resource';
import Vuelidate from 'vuelidate'

// require('./bootstrap');

window.Vue = require('vue');

Vue.component('app', require('./components/AppComponent.vue').default)
Vue.component('v-select', vSelect)
Vue.use(VueResouerce)
Vue.use(Vuelidate)
moment.locale('es')
import router from './routes'

const app = new Vue({
    el: '#app',
    router

});
var app = new Vue({
   el:'#app',
    data:{
        name: false,
        editModal:false,
        deleteModal:false,
        users:[],
        search: {text: ''},
        emptyResult:false,
        newUser:{
            firstname:'',
            lastname:'',
            gender:'',
            birthday:'',
            email:'',
            contact:'',
            address:''},
        chooseUser:{},
        formValidate:[],
        successMSG:'',
        
        //pagination
        currentPage: 0,
        rowCountPage:5,
        totalUsers:0,
        pageRange:2
    },
     created(){
      this.showAll(); 
    },
    methods:{
         showAll(){ axios.get(this.url+"user/showAll").then(function(response){
                 if(response.data.users == null){
                     v.noResult()
                    }else{
                        v.getData(response.data.users);
                    }
            })
        }
    }
})