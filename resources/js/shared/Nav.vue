<template>
    <nav>
        <ul>
            <li>
                <NavLink href='/' :active="$page.component === 'home'">Home</NavLink>
            </li>
            <li>
                <NavLink href='/users' :active="$page.component === 'users'">Users</NavLink>
            </li>
            <li>
                <NavLink href='/settings' :active="$page.component === 'settings'">Settings</NavLink>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
nav ul {
    list-style-type: none;
    display: flex;
}

nav ul li {
    margin-left: 15px;
}

nav ul li:first-child {
    margin-left: 0;
}
</style>

<script setup>
import NavLink from "./NavLink.vue";
</script>
