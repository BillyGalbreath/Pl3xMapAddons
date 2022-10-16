<template>
    <div>
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
a,
span {
    padding: 0 5px;
}

a.active {
    font-weight: bold;
}

.disabled {
    color: #555555;
}
</style>

<script setup>
defineProps({
    links: Array
});
</script>
