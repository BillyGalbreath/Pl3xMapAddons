<template>
    <div>
        <Head title="Dashboard"/>

        <div class="tokens">
            <h5>Tokens</h5>
            <div class="token">
                <span>Name</span>
                <button>Delete</button>
            </div>
            <div class="token">
                <span>Name</span>
                <button>Delete</button>
            </div>
            <div class="token">
                <span>Name</span>
                <button>Delete</button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.tokens {
    background-color: #ffffff;
    background: var(--addon-background);
    color: var(--addon-text);
    border: 1px solid var(--addon-border);
    border-radius: 4px;
    margin: 20px auto;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
}

.token {
    background-color: #efefef;
    background: var(--addon-background);
    color: var(--addon-text);
    border: 1px solid var(--addon-border);
    border-radius: 4px;
    margin: 20px auto;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
}

.animate .tokens,
.animate .token {
    transition: var(--fast);
}
</style>
