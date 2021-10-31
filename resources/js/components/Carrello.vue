<template>
    <div class="carrello">
        <h3>Carrello</h3>
        <div v-for="(datiItem, index) in cart" :key="index" class="dati-item">
            <div class="nome-prodotto">
                {{ datiItem }}
            </div>
            <div class="prezzo">
                300 €
            </div>
        </div>

        <hr>

        <div class="total-price">
            300 €
        </div>
    </div>
</template>

<script>
    export default {
        name:'Carrello',
        props: {
            cart: Array, 
        },
        data() {
            return {
                
            }
        },
        
    }
</script>
