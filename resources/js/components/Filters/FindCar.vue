<template>
    <div class="find-car container">
        <div class="container">
            <div class="find-car-form">
                <h4 class="find-car-title">Let's Find Your Perfect Car</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" aria-describedby="type" placeholder="Enter type">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" aria-describedby="type" placeholder="Enter type">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" aria-describedby="type" placeholder="Enter type">
                            </div>
                        </div>
                        <div class="col-lg-3 align-self-end">
                            <button class="theme-btn" type="submit"><span class="far fa-search"></span> Find Your
                                Car</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FindCar"
}
</script>

<style scoped>
.find-car{
    margin: 0 auto;
    border: 1px solid rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    padding: 20px 0;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.find-car-title{
    font-size: 25px;
    margin-bottom: 10px;
    padding: 10px;
    border-bottom: 1px solid black;
}
.theme-btn{
    font-size: 16px;
    color: black;
    padding: 12px 20px;
    transition: all .5s;
    text-transform: capitalize;
    position: relative;
    border-radius: 13px;
    font-weight: 500;
    cursor: pointer;
    text-align: center;
    overflow: hidden;
    border: none;
    background: red;
    box-shadow: black;
    z-index: 1;
}
</style>
