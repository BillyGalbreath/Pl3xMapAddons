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
            <span v-if="!loggedIn">
                <li class="github">
                    <a :href="route('login')" class='btn-github'>
                        <GitHubLogo/>
                        Sign in with GitHub
                    </a>
                </li>
            </span>
            <span v-if="loggedIn">
                <li class="github">
                    <Link :href="route('logout')" method="post" as="button" class='btn-github'>
                        Log out
                    </Link>
                </li>
            </span>
            <li class="hamburger">
                <button @click="this.$emit('openSidebar')" aria-label="open sidebar">
                    <svg stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
nav ul {
    display: flex;
    align-items: center;
    list-style-type: none;
    margin: 0;
    padding: 0;
    font-size: 0;
}

nav li {
    display: flex;
    align-items: center;
    padding: 0 10px;
    font-size: 1rem;
}

nav li:first-child {
    padding-left: 0;
}

nav .github {
    padding-right: 0;
}

nav .btn-github {
    display: flex;
    align-items: center;
    padding: 0 10px 0 5px;
    font-family: "Poppins", sans-serif;
    color: var(--github-text);
    background-color: var(--github-background);
    stroke: var(--github-text);
    fill: var(--github-text);
    border: 1px solid var(--lighter);
    border-radius: 4px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
    cursor: pointer;
}

nav .btn-github svg {
    padding: 3px 10px 4px 0;
    height: 26px;
}

nav .btn-github:focus,
nav .btn-github:hover,
nav .btn-github:active {
    background-color: #2b2b2b;
    border-color: #2b2b2b;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

nav .btn-github:active:hover {
    background-color: #191919;
    border-color: #191919;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

nav .btn-logout {
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

nav img.avatar {
    width: 32px;
    height: 32px;
    border-radius: 16px;
    margin-right: 10px;
}

nav #dark-mode-toggle {
    display: flex;
    align-items: center;
    background-color: transparent;
    border: 0;
    font-size: 20px;
}

nav .moon,
nav .sun {
    height: 26px;
    cursor: pointer;
    fill: black;
}

html.darkmode nav .moon,
html.darkmode nav .sun {
    fill: white;
}

nav .moon,
html.darkmode nav .sun {
    width: 26px;
}

html.darkmode nav .moon,
nav .sun {
    width: 0;
}

nav .hamburger {
    padding: 0;
}

nav .hamburger button {
    width: 0;
    height: 28px;
    background: transparent;
    fill: var(--darkest);
    border: 0;
}

@media (max-width: 800px) {
    nav li {
        font-size: 0;
        padding: 0;
    }

    html.darkmode nav .sun,
    nav .moon {
        width: 0;
    }

    nav .btn-github {
        font-size: 0;
        padding: 0;
        visibility: hidden;
    }

    nav .btn-github svg {
        padding: 0;
        width: 0;
        height: 0;
    }

    nav .hamburger button {
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
    const user = usePage().props.value.auth.user;
    return user != undefined;
});

const doLogin = () => {
    new Promise((resolve, reject) => {
        axios
            .get('/api/login')
            .then((response) => {
                resolve(response);
            })
            .catch((error) => {
                reject(error);
            });
    }).then((response) => {
        if (response.data.url) {
            window.location.href = response.data.url;
        }
    });
}

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
