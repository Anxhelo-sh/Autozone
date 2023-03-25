<template>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Let's Check our Cars !</h1>
        <div class="cars-container">
            <div class="car-card">
                <img class="card-thumbnail" src="/storage/images/logo.png" alt="thumbnail">
                <h4>Mercedes Benz</h4>
                <div class="card-details">
                    <div class="row">
                        <div class="col-6">Automatic</div>
                        <div class="col-6">Model: 2023</div>
                    </div>
                    <div class="row">
                        <div class="col-6">Automatic</div>
                        <div class="col-6">Model: 2023</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4>$45,620</h4>
                    </div>
                    <div class="col-6 align-self-end">
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="car-card">
                <img class="card-thumbnail" src="/storage/images/logo.png" alt="thumbnail">
                <h4>Mercedes Benz</h4>
                <div class="card-details">
                    <div class="row">
                        <div class="col-6">Automatic</div>
                        <div class="col-6">Model: 2023</div>
                    </div>
                    <div class="row">
                        <div class="col-6">Automatic</div>
                        <div class="col-6">Model: 2023</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4>$45,620</h4>
                    </div>
                    <div class="col-6 align-self-end">
                        <button @click="addCarToBasket('test')">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Listing",

    methods: {
        addCarToBasket(product) {
            this.$store.dispatch('addToBasket', product)
        }
    }
}
</script>

<style>
.cars-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    align-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

.car-card {
    width: 300px;
    border: 1px solid black;
    border-radius: 10px;
    height: 400px;
    padding: 10px;
}

.card-thumbnail {
    width: 100%;
    height: 60%;
    padding-bottom: 5px;
    border-radius: 10px;
}

.card-details {
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.5);
}
</style>
