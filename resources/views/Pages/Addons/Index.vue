<template>
    <Head title="Addons"/>
    <div class="container">
        <Categories/>
        <div class="page">
            <Search/>
            <AddonListEntry
                v-for="addon in addonsList.data"
                :key="addon.id"
                :id="'addon_id_'+addon.id"
                :addon="addon"
            />
        </div>
    </div>
</template>

<style>
.page {
    width: 100%;
    min-width: 300px;
}
</style>

<script setup>
import Categories from "../../Components/Categories.vue";
import Search from "../../Components/Search.vue";
import AddonListEntry from "../../Components/AddonListEntry.vue";
import {onMounted, onUnmounted, ref} from "vue";
import axios from "axios";

const addonsList = ref({
    data: [],
    total: 0,
    current_page: 1,
    next_page_url: window.location.href
});

onMounted(() => {
    loadMore();
});

onUnmounted(() => {
    observer.disconnect();
});

const observer = new IntersectionObserver(function (entries) {
    if (entries[0].isIntersecting === true) {
        loadMore();
    }
}, {threshold: [0]});

function loadMore() {
    const url = addonsList.value.next_page_url;
    if (url) {
        axios.get(url)
            .then(response => {
                addonsList.value = {
                    ...response.data,
                    data: [
                        ...new Set([
                            ...addonsList.value.data,
                            ...response.data.data
                        ])
                    ]
                };
            })
            .then(() => {
                observeLastAddon();
            });
    } else {
        observer.disconnect();
    }
}

function observeLastAddon() {
    observer.disconnect();
    const total = addonsList.value.data.length;
    if (total >= addonsList.value.total) {
        return;
    }
    const id = addonsList.value.data[total - 1]?.id;
    const element = document.querySelector("#addon_id_" + id);
    if (element) {
        console.log("observe: " + id + " (" + total + ")");
        observer.observe(element);
    } else {
        console.log("unknown: " + id + " (" + total + ")");
    }
}
</script>
