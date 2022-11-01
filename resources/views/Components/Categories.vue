<template>
    <div>
        <p>Categories</p>
        <ul class="no-select">
            <li>
                <Checkbox label="Something"/>
            </li>
            <li>
                <Checkbox label="Other Thing"/>
            </li>
            <li>
                <Checkbox label="I Don't Know"/>
            </li>
            <li>
                <Checkbox label="Hmmm"/>
            </li>
        </ul>

        <p>Versions</p>
        <ul class="no-select">
            <li>
                <Checkbox label="1.19.2"/>
            </li>
        </ul>
    </div>
</template>

<style scoped>
div {
    position: -webkit-sticky;
    position: sticky;
    top: 20px;
    min-width: 250px;
    margin: 20px 20px 20px 0;
    padding: 20px;
    background: var(--sidebar-background);
    color: var(--sidebar-text);
    border: 1px solid var(--sidebar-border);
    border-radius: 4px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
}

.animate div {
    transition: var(--fast);
}

p {
    margin: 20px 0 10px;
    font-weight: bold;
}

p:first-child {
    margin-top: 0;
}

@media (max-width: 800px) {
    div {
        width: 100%;
        position: revert;
    }
}
</style>
<script setup>
import Checkbox from "./Checkbox.vue";
</script>
