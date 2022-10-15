<template>
    <div>
        <Head>
            <title>Pl3xMap Addons</title>
            <meta type="description" content="Blazing fast live mapping solution for Paper and friends" head-key="description"/>
        </Head>
        <header>
            <div>
                <h1>Pl3xMap Addons</h1>
                <p>Welcome, {{ username }}</p>
            </div>
            <Nav/>
        </header>
        <section>
            <slot/>
        </section>
    </div>
</template>

<style>
@font-face {
    font-family: 'Poppins';
    font-display: swap;
    font-style: normal;
    font-weight: 400;
    src: url('/fonts/poppins.woff2') format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

<style scoped>
section {
    padding: 6px;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background-color: #dedede;
}

header div {
    display: flex;
    align-items: center;
}

header div h1 {
    font-size: 1.5rem;
}

header div p {
    margin-left: 20px;
}
</style>

<script setup>
import Nav from './Nav.vue';
import {usePage} from "@inertiajs/inertia-vue3";
import {computed} from "vue";

const username = computed(() => usePage().props.value.auth.user.username);
</script>
