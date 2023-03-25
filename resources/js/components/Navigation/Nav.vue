<template>
    <div class="container top-nav-container">
        <div>
            <img src="/storage/images/logo.png" class="logo" alt="logo">
        </div>
        <div>
            <ul class="menu">
                <li class="menu-items">
                    <a href="/">Home</a>
                </li>
                <li class="menu-items">
                    <a href="#">Listing Page</a>
                </li>
                <li class="menu-items">
                    <a href="#">About</a>
                </li>
                <li v-if="isUserAdmin" class="menu-items">
                    <a href="/admin">Dashboard</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-between gap-2 ">
            <div class="shopping-cart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                </svg>
            </div>
            <div class="d-flex justify-between gap-2">
                <a v-if="!isAuthenticated" href="/login">Login</a>
                <a v-if="!isAuthenticated" href="/register">Register</a>
                <a v-if="isAuthenticated" @click="logout">Logout</a>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Nav",
    props: ['role'],
    data() {
        return {
            isUserAdmin: false,
            isAuthenticated: false,
        };
    },
    methods: {
        checkUserRoles() {
            this.role.forEach((role) => {
                if (role.name === "admin") {
                    this.isUserAdmin = true;
                    this.isAuthenticated = true;
                }
                if (role.name === "user") {
                    this.isAuthenticated = true;
                }
            });
        },
        logout() {
            axios.post('/logout')
                .then((response) => {
                    if (response.status === 204) {
                        window.location.href = "/";
                    }
                })
                .catch(()=>{
                    this.$toast.error("Can't proceed with the logout !")
                });
        }

    },
    mounted() {
        this.checkUserRoles();
    }
}
</script>

<style>
.top-nav-container {
    padding: 0 30px;
    display: flex;
    justify-content: space-between;
    align-content: center;
    align-items: center;
    width: 100%;
    margin-bottom: 25px;
}

.logo {
    width: 100%;
    height: 80px;
}

ul {
    list-style-type: none;
    margin: 0;
}

a {
    text-decoration: none;
    color: black;
}

.menu {
    display: flex;
    justify-content: space-between;
    align-content: center;
    align-items: center;
}

.menu-items {
    padding: 0 10px;
}

.shopping-cart {
    width: 25px;
    color: #750a0a;
}
</style>
