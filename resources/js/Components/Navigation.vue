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
                    <Sun class="sun"/>
                    <Moon class="moon"/>
                </button>
            </li>
            <li class="github" v-if="!loggedIn">
                <a :href="route('login')">
                    <button class='btn-github'>
                        <GitHubLogo/>
                        <span>Sign in with GitHub</span>
                    </button>
                </a>
            </li>
            <li class="github" v-if="loggedIn">
                <Link :href="route('logout')" method="post" as="button" class='btn-github'>
                    <span>Log out</span>
                </Link>
            </li>
            <li class="hamburger">
                <button @click="this.$emit('openDrawer')" aria-label="open drawer">
                    <svg stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
ul {
    display: flex;
    align-items: center;
    list-style-type: none;
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

li:first-child {
    padding-left: 0;
}

.github {
    padding-right: 0;
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
    fill: var(--github-text);
    border: 1px solid var(--lighter);
    border-radius: 4px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
    cursor: pointer;
}

.btn-github span {
    margin-left: 5px;
}

.btn-github svg {
    padding: 3px 5px 4px 0;
    height: 26px;
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

.btn-logout {
    background: #ffffff;
    color: var(--nav-btn-color);
    border: 2px solid var(--primary);
    padding: 6px 10px;
    border-radius: 4px;
    font-family: "Poppins", serif;
    cursor: pointer;
    font-size: 1rem;
    margin-left: 20px;
}

.avatar {
    width: 32px;
    height: 32px;
    border-radius: 16px;
    margin-right: 10px;
}

#dark-mode-toggle {
    display: flex;
    align-items: center;
    background-color: transparent;
    border: 0;
    font-size: 0;
}

#dark-mode-toggle svg {
    transition: 0.5s ease width;
}

.moon,
.sun {
    height: 26px;
    cursor: pointer;
    fill: black;
}

html.darkmode .moon,
html.darkmode .sun {
    fill: white;
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
    fill: var(--darkest);
    border: 0;
    cursor: pointer;
}

li.hamburger button svg {
    width: 100%;
    height: 100%;
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

    svg {
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
import GitHubLogo from "./GitHubLogo.vue";
import Moon from "./Moon.vue";
import Sun from "./Sun.vue";
import {computed} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";

const loggedIn = computed(() => {
    return usePage().props.value.auth.user;
});

setTimeout(() => {
    document.documentElement.classList.add('animate');
    document.getElementById('dark-mode-toggle')
        .addEventListener('click', () => {
            if (isEnabled()) {
                disable();
            } else {
                enable();
            }
        });
}, 100);
</script>
