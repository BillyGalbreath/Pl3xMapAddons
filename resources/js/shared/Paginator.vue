<template>
    <div class="pagination">
        <Component
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            :class="{'disabled': !link.url, 'active':link.active}"
        />
    </div>
</template>

<style scoped>
.pagination a,
.pagination span {
    padding: 0 5px;
}

.pagination a.active {
    font-weight: bold;
}

.pagination .disabled {
    color: #555555;
}
</style>

<script setup>
defineProps({
    links: Array
});
</script>
