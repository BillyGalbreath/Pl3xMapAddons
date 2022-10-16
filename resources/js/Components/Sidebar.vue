<template>
    <div class="no-select">
        <p>Categories</p>
        <ul>
            <li>
                <label>
                    <input type="checkbox"/>
                    Something
                </label>
            </li>
        </ul>
    </div>
</template>

<style scoped>
div {
    min-width: 250px;
    margin: 20px 20px 20px 0;
    padding: 20px;
    background: var(--sidebar-background);
    color: var(--sidebar-text);
    border: 1px solid var(--sidebar-border);
    border-radius: 4px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
}

p {
    font-weight: bold;
}

@media (max-width: 800px) {
    div {
        width: 100%;
    }
}
</style>
