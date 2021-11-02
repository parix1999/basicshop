<template>
    <div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <Card :products="products"
                @add="itemsAdd"
                />
            </div>
            <div v-if="cart.length > 0" class="col-12 col-sm-12 col-md-4 col-lg-4">
                <Carrello :cart="cart"
                :totalPrice="totalPrice"
                @delete="cancellazione"
                />
            </div>
            
            <div v-else>
                <div class="intro-cart">Lista dei desideri!!</div>
            </div>
        </div>
    </div>
</template>

<script>
    import Card from './Card.vue';
    import Carrello from './Carrello.vue';

    export default {
        components: { 
            Card, 
            Carrello,
        },
        name:'Prodotti',

        data() {
            return {
                products: [],
                cart:[],
            }
        },
        created() {
            axios.get('http://127.0.0.1:8000/api/products').then((response) => {
                this.products = response.data.data;
                console.log(this.products);
            });

           
        },

        computed:{
            totalPrice() {
                let total = 0;
                if (this.cart.length > 0){
                    this.cart.forEach((element) => {
                        total += element.price;
                    });
                }
                return total; 
            }
        },

        methods: {
            itemsAdd(productId) {
                axios.get(`http://127.0.0.1:8000/api/products/${productId}`).then((response) => {
                    this.cart.push(response.data);

                    // ToDo da fare il controllo se si mette lo stesso prodotto nel carrello 

                    // this.cart.forEach((element)=>{
                    //     console.log(element.id)
                    //     console.log(response.data.id);
                        
                    //     if(element.id == response.data.id) {
                    //         alert('due id uguali')
                    //     } 
                    // });
                });
            },

            cancellazione(index) {
                this.cart.splice(index, 1);
            },  


        },

        mounted() {
            // Prima controlla che ci sia qualcosa da salvare:
            if(localStorage.cart) {
                // Se ci sono, farà l'update del value:
                this.cart = JSON.parse(localStorage.cart); 
            }
        },
        watch: {
            cart(newCart) {
                // Sniped codice js che salva i data, lo storage accetta solo string
                // si trasforma in stringa
                localStorage.cart = JSON.stringify(newCart); 
            }   
        },
        
    }
</script>
