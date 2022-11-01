<template>
    <textarea @keydown.tab.prevent="onTabPress" @keyup="update" v-text="modelValue"/>
</template>

<script setup>
defineProps({
    modelValue: String
});

let emit = defineEmits(['update:modelValue']);

function onTabPress(e) {
    const textarea = e.target,
        val = textarea.value,
        start = textarea.selectionStart,
        end = textarea.selectionEnd;
    textarea.value = val.substring(0, start) + "\t" + val.substring(end);
    textarea.selectionStart = textarea.selectionEnd = start + 1;
}

function update(e) {
    emit('update:modelValue', e.target.value);
}
</script>
