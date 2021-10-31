<template>
    <div>
        <div class="row">
            <div class="col-8">
                <Card :products="products"
                :productId="productId"
                @add="itemsAdd"
                />
            </div>
            <div class="col-4">
                <Carrello />
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
                addItems:[],
            }
        },

        created() {
            axios.get('http://127.0.0.1:8000/api/products').then((response) => {
                this.products = response.data.data;
                console.log(this.products);
            });
        },

        methods: {
            itemsAdd(productId) {
                axios.get(`http://127.0.0.1:8000/api/products/${productId}`).then((response) => {
                    this.addItems = response.data; 
                });
            }
        },
    }
</script>
