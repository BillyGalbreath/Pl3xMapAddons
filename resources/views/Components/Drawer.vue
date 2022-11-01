<template>
    <div :class="{open:showDrawer}">
        <button @click="this.$emit('closeDrawer')" aria-label="close drawer">
            <img src="/images/close.svg" alt="Close"/>
        </button>
    </div>
</template>

<style scoped>
div {
    position: absolute;
    left: 0;
    right: 0;
    width: 0;
    height: 100%;
    background-color: var(--drawer-background);
    color: var(--drawer-text);
    z-index: 9999;
    transition: var(--fast);
}

button {
    padding: 0;
    margin: 20px;
    width: 28px;
    height: 28px;
    background: transparent;
    color: black;
    border: 0;
    float: right;
    cursor: pointer;
}

img {
    padding: 2px;
}

.darkmode img {
    filter: invert();
}

.open {
    width: 100%;
    z-index: 9999;
}
</style>

<script setup>
defineProps({
    showDrawer: Boolean
});
</script>
