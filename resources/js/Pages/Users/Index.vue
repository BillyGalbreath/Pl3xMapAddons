<template>
    <div>
        <Head>
            <title>Users</title>
        </Head>

        <div class="top">
            <h1>Users</h1>
            <Link href="/users/create">New User</Link>
            <input v-model="search" type="text" placeholder="Search..."/>
        </div>

        <ul>
            <li v-for="user in users.data" :key="user.id" v-text="user.name"/>
        </ul>

        <Paginator :links="users.links"/>
    </div>
</template>

<style scoped>
.top {
    display: flex;
    justify-content: space-between;
}

.top input {
    border: 1px solid black;
    border-radius: 5px;
    padding: 0 5px;
}
</style>

<script setup>
import {Inertia} from "@inertiajs/inertia";
import {ref, watch} from "vue";
import Paginator from "../../shared/Paginator.vue";
import debounce from "lodash/debounce";

let props = defineProps({
    users: Object,
    filters: Object
});

let search = ref(props.filters.search);

watch(search, debounce(function (value) {
    Inertia.get('/users', {
        search: value
    }, {
        preserveState: true,
        replace: true
    });
}, 500));
</script>
