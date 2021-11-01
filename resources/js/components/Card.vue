<template>
    
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6" v-for="(prodotto, index) in products" :key="index">
                <div class="card p-4 personalizzazione">
                    <div class="box-image">
                        <img :src="`storage/${prodotto.picture}`" alt="">
                    </div>

                    <div class="name">
                        <div>{{ prodotto.name }}</div>
                    </div>
                    
                    <div class="descrizione">
                        {{ prodotto.description }}
                        <div class="price">{{ prodotto.price }} €</div>
                    </div>

                    <div class="dati-utente">
                        <div v-for="user in prodotto.user" :key="user.id">
                            Inserzione inserita da: {{ user.name }}
                        </div>

                        <div class="buy">
                            <button class="btn btn-info" @click="$emit('add', prodotto.id)" >
                                Aggiungi al Carrello
                            </button>
                        </div>

                        <div v-for="category in prodotto.category" :key="category.id">
                            Categoria: {{ category.name }}
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
