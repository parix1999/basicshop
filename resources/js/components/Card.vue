<template>
    <div class="row">
        
            <div v-for="prodotto in products" :key="prodotto.id" class="col-12">
                <div class="row justify-content-space-between">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="box-image">
                            <img :src="`storage/${prodotto.picture}`" alt="">
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="descrizione">
                            {{ prodotto.description }}
                        </div>

                        <div class="dati-utente">
                            <div v-for="user in prodotto.user" :key="user.id">
                                Inserzione inserita da: {{ user.name }}
                            </div>
                            <div v-for="category in prodotto.category" :key="category.id">
                                Categoria: {{ category.name }}
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-12 col-lg-4">
                        <div class="price">
                            {{ prodotto.price }} €
                        </div>
                    </div>
                    
                </div>
            </div>

        
    </div>
</template>

<script>
    export default {
        name:'Card',
        props: {
            products: Array, 
        },
        data() {
            return {
              
            }
        },
        

    }
</script>
