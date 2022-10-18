<template>
    <Head title="Addons"/>
    <div class="container">
        <Categories/>
        <div class="page">
            <Search/>
            <div class="addon-details">
                <img src="/images/placeholder.svg" alt="Title"/>
                <h2>Title</h2>
                <p><strong>Author: </strong>Author</p>
                <p><strong>Description: </strong>Short Description</p>
                <p>Created At</p>
            </div>
            <div class="addon-details">
                <img src="/images/placeholder.svg" alt="Title"/>
                <h2>Title</h2>
                <p><strong>Author: </strong>Author</p>
                <p><strong>Description: </strong>Short Description</p>
                <p>Created At</p>
            </div>
            <div class="addon-details">
                <img src="/images/placeholder.svg" alt="Title"/>
                <h2>Title</h2>
                <p><strong>Author: </strong>Author</p>
                <p><strong>Description: </strong>Short Description</p>
                <p>Created At</p>
            </div>
        </div>
    </div>
</template>

<style>
.page {
    width: 100%;
    min-width: 300px;
}

.addon-details {
    background: var(--addon-background);
    color: var(--addon-text);
    border: 1px solid var(--addon-border);
    border-radius: 4px;
    margin: 20px auto;
    padding: 20px;
    position: relative;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
}

.animate .addon-details {
    transition: var(--fast-bg);
}
.animate .addon-details p,
.animate .addon-details h2 {
    transition: var(--fast);
}

.addon-details img {
    width: 100px;
    height: 100px;
    float: left;
    margin: 0 20px 20px 0;
}

.addon-details h2 {
    color: var(--addon-header);
    margin: 0 0 10px 0;
    font-size: 1.2rem;
}

.addon-details p {
    margin: 0;
    font-size: 0.9rem;
    color: var(--addon-text);
}

.animate .addon-details h2,
.animate .addon-details p{
    transition: var(--fast);
}
</style>

<script setup>
import Categories from "../Components/Categories.vue";
import Search from "../Components/Search.vue";
</script>
