const { default: axios } = require("axios")

const app = new Vue({
    el: '#app',
    data:{
        select_paises:'',
        pais:[]
    },
    methods: {
        loadPaiese(){
            axios.get('paises').then((response) => {
                this.pais = response.data; 
            });
        }
    }
})
