<template>
    <label>
        <p>{{ label }}</p>
        <input type="checkbox">
        <span></span>
    </label>
</template>

<style scoped>
/* Customize the label (the container) */
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

/* Hide the browser's default checkbox */
label input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
span {
    position: absolute;
    top: 3px;
    left: 0;
    height: 15px;
    width: 15px;
    background-color: var(--white);
    border-radius: 4px;
}

/* On mouse-over, add a grey background color */
label:hover input ~ span {
    background-color: var(--lightest);
}

/* When the checkbox is checked, add a blue background */
label input:checked ~ span {
    background-color: var(--primary);
}

/* Create the checkmark/indicator (hidden when not checked) */
span:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
label input:checked ~ span:after {
    display: block;
}

/* Style the checkmark/indicator */
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
