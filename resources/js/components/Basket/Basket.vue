<template>
    <div class="shoping-cart-container">
        <div class="d-flex-h">
            <div class="inner-container">
                <button class="close-btn" @click="$emit('close-cart-menu')">x</button>

                <div class="side-cart-inner mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                    <div>

                    </div>
                    <h4 class="cart__title">Your Cart</h4>
                    <div data-tbyb="tbyb-minicart-warning"></div>

                    //v-for="prod in $store.state.productsInCart" :key="prod.id"
                    <div  data-tbyb="tbyb-minicart-line-item" class="cart-item pickmix-group" data-line="1"
                         data-item-id="39904825082041" data-id="39904825082041" data-package-id="1661350951149">
                        <img
                            src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/ZuguFeatureImageiPad11_3rd__12.9_5th__10.9_784f0902-1fb6-4a79-847c-2c988209d8dc_large.jpg?v=1634080955"
                            class="cart-thumb img-fluid mCS_img_loaded">
                        <div class="cart-info">
                            <h4>name</h4>

                            <div data-tbyb="tbyb-tag"></div>
                            <p class="price" data-tbyb="tbyb-price-line">$price</p>
                            <div class="quantity">
                                <span>QTY: 1</span>
                                <a href="javascript:;" data-time="1661350951149" class="remove-cart">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mCSB_1_scrollbar_vertical"
                 class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical"><a href="#"
                                                                                                 class="mCSB_buttonUp"></a>
                <div class="mCSB_draggerContainer">
                    <div id="mCSB_1_dragger_vertical" class="mCSB_dragger">
                        <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                    </div>
                    <div class="mCSB_draggerRail"></div>
                </div>
                <a href="#" class="mCSB_buttonDown"></a></div>
            <div class="stick-f">
                <div data-tbyb="tbyb-minicart-total">
                    <p class="g-total">
                        <span data-tbyb="tbyb-minicart-total__text">Subtotal: </span>
                        <span
                            data-tbyb="tbyb-minicart-total__price">$69.99</span></p>
                </div>
                <div href="/checkout" class="cart_checkout button">Checkout</div>
                <i data-govx-id="s"></i>
                <div class="cv_cart_payment_icon2">
                    <img
                        src="//cdn.shopify.com/s/files/1/0505/4709/7785/t/36/assets/Screenshot_2021-12-14_at_6.35.49_PM.png?v=168469658856725585511657886370"
                        style="width: 100%; margin-top:10px;">
                </div>
            </div>
        </div>

    </div>

</template>

<script>

export default {
    name: "ShopingCart",
    data(){
        return{
        };
    },
    components:{
    }
}
</script>

<style scoped>
.shoping-cart-container{
    width: 415px;
    height: 80vh;
    background-color: #fff;
    padding: 30px 17px 17px 24px;
    border: 1px solid black ;
    border-radius: 20px;
    position:absolute;
    z-index: 222;
    position: absolute;
    top: 3%;
    right: 97px;

}
.inner-container{
    position:relative;
}
.cart-item {
    width: 100%;
    position: relative;
    display: flex;
    margin-bottom: 16px;
}
.cart-info h4 {
    font-size: 16px;
    line-height: 22px;
    margin-bottom: 12px;
}
.close-btn{
    position: absolute;
    right: 0;
    top: 0;
}
.cart-info .price {
    font-size: 14px;
    line-height: 24px;
    letter-spacing: -.28px;
    margin: 0;
}
.cart-info .quantity {
    color: #8f8f8f;
    font-size: 14px;
    line-height: 24px;
    letter-spacing: -.28px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.cart__title {
    margin-bottom: 24px;
    font-size: 24px;
    line-height: 22px;
    letter-spacing: -.24px;
}
.cart-item .cart-thumb {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    margin-right: 20px;
    object-fit: cover;
    border-radius: 20px;
}
.d-flex-h {
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
}
.cart_checkout {
    background-color: #444;
    border: 1px solid rgb(68,68,68);
    color: #fff;
    font-size: 16px;
    line-height: 26px;
    width: 100%;
}
.govx-id-slim i, .cv_cart_payment_icon2 img {
    filter: grayscale(100%);
}
.cv_cart_payment_icon2 img {
    border-radius: 47px;
    max-width: 400px;
    margin: 0 auto;
    display: block;
}
.g-total{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.cv_cart_payment_icon2{
    margin-top: 15px;
}
</style>
