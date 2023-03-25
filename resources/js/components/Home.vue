<template>
    <div>
        <FindCar/>
        <Listing/>
    </div>
</template>

<script>
import FindCar from "./Filters/FindCar";
import Listing from "./Cars/Listing";
import Basket from "./Basket/Basket";

export default {
    name: "Home",
    components: {
        FindCar,
        Listing,
        Basket
    }
}
</script>

<style scoped>

</style>
