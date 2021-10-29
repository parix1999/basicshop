<template>
    <div class="row">
        
            <div v-for="prodotto in products" :key="prodotto.id" class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="box-image">
                            <img :src="`storage/${prodotto.picture}`" alt="">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="descrizione">
                            {{ prodotto.description }}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="price">
                            {{ prodotto.price }}
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
