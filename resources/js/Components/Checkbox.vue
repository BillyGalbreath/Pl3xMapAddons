<template>
    <label>
        <p>{{ label }}</p>
        <input type="checkbox">
        <span></span>
    </label>
</template>

<style scoped>
label {
    display: flex;
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

label input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

span {
    position: absolute;
    top: 3px;
    left: 0;
    height: 15px;
    width: 15px;
    background-color: var(--white);
    border-radius: 4px;
}

label:hover input ~ span {
    background-color: var(--lightest);
}

label input:checked ~ span {
    background-color: var(--primary);
}

span:after {
    content: "";
    position: absolute;
    display: none;
}

label input:checked ~ span:after {
    display: block;
}

label span:after {
    left: 5px;
    top: 2px;
    width: 3px;
    height: 6px;
    border: solid white;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>

<script setup>
defineProps({
    label: String
})
</script>
