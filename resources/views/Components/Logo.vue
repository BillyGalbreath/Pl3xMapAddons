<template>
    <Link :href="route('index')">
        <img src="/images/logo.svg" alt="Pl3x Logo"/>
        <h1>Pl3xMap Addons</h1>
    </Link>
</template>

<style scoped>
a {
    display: flex;
    align-items: center;
    color: var(--header-link);
    text-decoration: none;
}

html.darkmode img {
    filter: invert();
}

img {
    width: 50px;
    height: 50px;
}

h1 {
    display: inline-block;
    margin-left: 10px;
    font-size: 2rem;
}

.animate img,
.animate h1 {
    transition: var(--fast);
}

@media (max-width: 500px) {
    h1 {
        font-size: 0;
    }
}
</style>
