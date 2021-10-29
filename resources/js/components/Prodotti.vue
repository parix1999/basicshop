<template>
    <Card :products="products"/>
</template>

<script>
    import Card from './Card.vue';

    export default {
        components: { 
            Card, 
        },
        name:'Prodotti',
        data() {
            return {
                products: [],
            }
        },
        created() {
            axios.get('http://127.0.0.1:8000/api/products').then((response) => {
                this.products = response.data;
            });
        }
    }
</script>
