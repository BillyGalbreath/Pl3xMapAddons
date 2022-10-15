<template>
    <div class="sidebar" :class="{open:showSidebar}">
        <div>
            <button class="hamburger" @click="this.$emit('closeSidebar')" aria-label="close sidebar">
                <svg stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</template>

<style scoped>
.sidebar {
    position: absolute;
    left: 0;
    right: 0;
    width: 0;
    height: 100%;
    background-color: var(--sidebar-bg);
    z-index: 9999;
}

.sidebar .hamburger {
    padding: 0;
    margin: 20px;
    width: 28px;
    height: 28px;
    background: transparent;
    color: black;
    border: 0;
    float: right;
}

.sidebar.open {
    width: 100%;
    z-index: 9999;
}
</style>

<script setup>
defineProps({
    showSidebar: Boolean
});
</script>
