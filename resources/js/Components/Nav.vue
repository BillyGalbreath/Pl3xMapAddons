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
ul {
    list-style-type: none;
    display: flex;
}

li {
    margin-left: 15px;
}

li:first-child {
    margin-left: 0;
}
</style>

<script setup>
import NavLink from "./NavLink.vue";
</script>
