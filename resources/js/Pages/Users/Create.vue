<template>
    <div>
        <Head title="Create User"/>

        <h1>Create New User</h1>

        <form method="post" @submit.prevent="submit">
            <div>
                <label for="name">Name</label>
                <input v-model="form.name" type="text" name="name" id="name"/>
                <div v-if="form.errors.name" v-text="form.errors.name" class="validation-error"></div>
            </div>
            <div>
                <label for="email">Email</label>
                <input v-model="form.email" type="text" name="email" id="email"/>
                <div v-if="form.errors.email" v-text="form.errors.email" class="validation-error"></div>
            </div>
            <div>
                <label for="password">Password</label>
                <input v-model="form.password" type="password" name="password" id="password"/>
                <div v-if="form.errors.password" v-text="form.errors.password" class="validation-error"></div>
            </div>
            <div>
                <button type="submit" :disabled="form.processing">Submit</button>
            </div>
        </form>
    </div>
</template>

<style scoped>
form {
    max-width: 400px;
    margin: 8px auto;
}

form div {
    margin-bottom: 12px;
}

form div label {
    display: block;
    margin-bottom: 4px;
    font-size: 0.85rem;
    font-weight: bold;
    text-transform: uppercase;
    color: #161b22;
}

form div input {
    width: 100%;
    padding: 10px;
    border: 1px solid #808080;
    border-radius: 5px;
}

form div button {
    background-color: #336699;
    color: white;
    border: 1px solid;
    border-radius: 5px;
    padding: 10px 20px;
}

form div button:hover {
    background-color: #4477aa;
}
</style>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

let form = useForm({
    name: '',
    email: '',
    password: '',
});

let submit = () => {
    form.post('/users');
}
</script>
