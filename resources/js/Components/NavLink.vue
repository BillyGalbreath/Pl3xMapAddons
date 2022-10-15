<template>
    <Link href='/' :class="{'active': active}">
        <slot/>
    </Link>
</template>

<style scoped>
a,
a:visited {
    color: black;
    text-decoration: none;
}

.active {
    font-weight: bold;
}

a:hover,
.active {
    text-decoration: underline;
}
</style>

<script setup>
defineProps({
    active: Boolean
});
</script>
