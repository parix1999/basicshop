<template>
    <div class="carrello">
        <h3>Preferiti</h3>
        <div class="sottotitolo">Items:</div>
        <div v-for="(datiItem, index) in cart" :key="index" class="dati-item">
            <div class="nome-prodotto">
                {{ datiItem.name }}
            </div>
            <div class="prezzo">
                {{ datiItem.price }} € 
            </div>
            <div class="ml-3 icon">
                <i class="bi bi-backspace" @click="$emit('delete', index)"></i> 
            </div>
        </div>

        <hr>

        <div class="total-price">
            <div class="text">Totale</div>
            <div class="total">
                {{ totalPrice }}  
            €</div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'Carrello',
        props: {
            cart: Array, 
            totalPrice: Number, 
        },
        data() {
            return {
                
            }
        },
        
        
    }
</script>
