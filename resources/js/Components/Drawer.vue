<template>
    <div :class="{open:showDrawer}">
        <button @click="this.$emit('closeDrawer')" aria-label="close drawer">
            <svg stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
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
    border-right: 1px solid var(--drawer-border);
    z-index: 9999;
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

svg {
    fill: var(--drawer-text);
    stroke: var(--drawer-text);
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
