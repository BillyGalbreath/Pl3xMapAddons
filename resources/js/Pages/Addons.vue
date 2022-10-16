<template>
    <Head title="Addons"/>
    <div class="container">
        <Sidebar/>
        <div class="page">
            <Search/>
            <div class="addon-details">
                <h2>Title</h2>
                <p><strong>Author: </strong>Author</p>
                <p><strong>Description: </strong>Short Description</p>
                <p>Created At</p>
            </div>
            <div class="addon-details">
                <h2>Title</h2>
                <p><strong>Author: </strong>Author</p>
                <p><strong>Description: </strong>Short Description</p>
                <p>Created At</p>
            </div>
            <div class="addon-details">
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
</style>

<script setup>
import Sidebar from "../Components/Sidebar.vue";
import Search from "../Components/Search.vue";
</script>
