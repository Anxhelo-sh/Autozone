<template>
    <div>
        <FindCar/>
        <Listing/>
    </div>
</template>

<script>
import FindCar from "./Filters/FindCar";
import Listing from "./Cars/Listing";

export default {
    name: "Home",
    components: {
        FindCar,
        Listing
    }
}
</script>

<style scoped>

</style>
