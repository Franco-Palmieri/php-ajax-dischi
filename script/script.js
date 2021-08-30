  
const app = new Vue(
    {
        el: '#app',
        data: {
            newArray: [],
        },
        created(){
            axios.get('http://localhost/Corso/Esercizio4PHP/php-ajax-dischi/database/api.php').then((response) =>{
                this.newArray = response.data;
            })
        },
        methods: {
        },
    }
);