<template>
    <nav>
        <ul>
            <li>
                <Link :href="route('addons')">Addons</Link>
            </li>
            <li>
                <Link :href="route('contact')">Contact</Link>
            </li>
            <li>
                <button id="dark-mode-toggle" aria-label="toggle dark mode">
                    <img src="/images/sun.svg" alt="Light Mode" class="sun"/>
                    <img src="/images/moon.svg" alt="Dark Mode" class="moon"/>
                </button>
            </li>
            <li class="github" v-if="!user">
                <a :href="route('login')">
                    <button class='btn-github'>
                        <img src="/images/github.svg" alt="GitHub Logo"/>
                        <span>Sign in with GitHub</span>
                    </button>
                </a>
            </li>
            <li class="github" v-if="user">
                <img :src="`${user.avatar}`" :alt="`${user.realname}'s Avatar`" class="avatar"/>
                <img src="/images/down.svg" alt="Open Dropdown" class="arrow"/>
                <div class="dropdown no-select">
                    <a>
                        @{{ user.username }}
                        <br/>
                        {{ user.realname }}
                    </a>
                    <hr/>
                    <a>Create Addon</a>
                    <hr/>
                    <a>Settings</a>
                    <a>Theme</a>
                    <hr/>
                    <Link :href="route('logout')" method="post" as="button">
                        <span>Log out</span>
                    </Link>
                </div>
            </li>
            <li class="hamburger">
                <button @click="this.$emit('openDrawer')" aria-label="open drawer">
                    <img src="/images/hamburger.svg" alt="Open Drawer"/>
                </button>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
ul {
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
    font-size: 0;
}

li {
    display: flex;
    align-items: center;
    padding: 0 10px;
    font-size: 1rem;
}

.animate li a,
.animate li button {
    transition: var(--fast);
}

li:first-child {
    padding-left: 0;
}

.github {
    position: relative;
    padding: 0 0 0 10px;
}

.btn-github {
    display: flex;
    align-items: center;
    padding: 0 10px 0 5px;
    font-family: "Poppins", sans-serif;
    line-height: 26px;
    color: var(--github-text);
    background-color: var(--github-background);
    stroke: var(--github-text);
    border: 1px solid var(--lighter);
    border-radius: 4px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
    cursor: pointer;
}

.btn-github span {
    margin-left: 5px;
}

.btn-github img {
    padding: 3px 5px 4px 0;
    height: 26px;
    filter: invert();
}

.btn-github:focus,
.btn-github:hover,
.btn-github:active {
    background-color: #2b2b2b;
    border-color: #2b2b2b;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

.btn-github:active:hover {
    background-color: #191919;
    border-color: #191919;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.avatar {
    width: 32px;
    height: 32px;
    border-radius: 16px;
    margin-right: 10px;
}

.arrow {
    width: 16px;
    margin-left: 5px;
    transition: var(--fast);
}

.darkmode .arrow {
    filter: invert();
}

.dropdown {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 9999;
    padding: 12px;
    background-color: var(--nav-dropdown-background);
    border: 1px solid var(--nav-dropdown-border);
    border-radius: 10px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 100ms ease-in-out opacity;
}

.dropdown hr {
    margin: 10px 0;
    border: 0;
    border-bottom: 1px solid var(--nav-dropdown-border);
}

.dropdown a,
.dropdown button {
    display: block;
    width: 100%;
    text-align: left;
    background-color: transparent;
    color: var(--nav-dropdown-color);
    border: 0;
    border-radius: 5px;
    padding: 5px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
    font-weight: normal;
    line-height: 1rem;
}

.dropdown a:hover,
.dropdown button:hover {
    background-color: var(--nav-dropdown-background-hover);
}

.github:hover .dropdown {
    opacity: 0.9;
    pointer-events: auto;
}

#dark-mode-toggle {
    display: flex;
    align-items: center;
    background-color: transparent;
    border: 0;
    font-size: 0;
}

#dark-mode-toggle img {
    transition: var(--fast);
}

.moon,
.sun {
    height: 26px;
    cursor: pointer;
}

html.darkmode .moon,
html.darkmode .sun {
    filter: invert();
}

.moon,
html.darkmode .sun {
    width: 26px;
}

html.darkmode .moon,
.sun {
    width: 0;
}

li.hamburger {
    padding: 0;
}

li.hamburger button {
    width: 0;
    height: 28px;
    background: transparent;
    border: 0;
    cursor: pointer;
}

li.hamburger button img {
    width: 100%;
    height: 100%;
}

.darkmode li.hamburger button img {
    filter: invert();
}

@media (max-width: 800px) {
    li {
        font-size: 0;
        padding: 0;
    }

    html.darkmode .sun,
    .moon {
        width: 0;
    }

    .btn-github {
        font-size: 0;
        padding: 0;
        visibility: hidden;
    }

    img {
        padding: 0;
        width: 0;
        height: 0;
    }

    li.hamburger button {
        width: 28px;
    }
}
</style>

<script setup>
import {computed} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";

const user = computed(() => {
    return usePage().props.value.auth.user;
});
</script>
