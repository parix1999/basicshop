<template>
    
        <!-- <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6" v-for="(prodotto, index) in products" :key="index">
                <div class="card p-4 personalizzazione">
                    <div v-for="category in prodotto.category" :key="category.id">
                            Categoria: {{ category.name }}
                    </div>

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
                            <div>Inserzione inserita da: {{ user.name }}</div>
                            <div>Contatto: {{ user.phone_number }}</div>
                        </div>

                        <div class="buy">
                            <i :class="heart()" @click="$emit('add', prodotto.id)"></i>
                        </div>
                    </div>
            
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6" v-for="(prodotto, index) in products" :key="index">
                <div class="card" style="width: 18rem;">
                    <img :src="`storage/${prodotto.picture}`" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ prodotto.name }}</h5>
                        <p class="card-text">{{ prodotto.description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li v-for="category in prodotto.category" :key="category.id" class="list-group-item">Categoria: {{ category.name }}</li>
                        <li v-for="user in prodotto.user" :key="user.id" class="list-group-item">Nome utente: {{ user.name }}</li>
                        <li v-for="user in prodotto.user" :key="user.id" class="list-group-item">Contatto: {{ user.phone_number }}</li>
                        <li class="list-group-item">Prezzo: {{ prodotto.price }}</li>
                    </ul>
                    <div class="card-body">
                        <button class="btn btn-outline-success"
                        @click="$emit('add', prodotto.id)">
                            Aggiungi ai Preferiti
                        </button>
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
                heartFlag: false,
            }
        },

    }
</script>
