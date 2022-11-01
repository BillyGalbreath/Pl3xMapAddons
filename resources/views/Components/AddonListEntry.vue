<template>
    <section>
        <div><img :src="addon.icon" alt="Title"/></div>
        <div>
            <h2>{{ addon.title }} <span>by {{ addon.user.username }}</span></h2>
            <p>{{ addon.description }}</p>
            <p>
                Created <span :title="full(createdAt)">{{ short(createdAt) }}</span>
                Updated <span :title="full(updatedAt)">{{ short(updatedAt) }}</span>
            </p>
        </div>
        <div class="nowrap">
            <p><strong>123.4k</strong> downloads</p>
            <p><strong>37</strong> followers</p>
        </div>
    </section>
</template>

<style scoped>
section {
    display: flex;
    background: var(--addon-background);
    color: var(--addon-text);
    border: 1px solid var(--addon-border);
    border-radius: 4px;
    margin: 20px auto;
    padding: 20px;
    position: relative;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
}

section div.nowrap {
    white-space: nowrap;
    text-align: right;
}

img {
    width: 100px;
    height: 100px;
    margin-right: 20px;
    border-radius: 5px;
}

h2 {
    color: var(--addon-header);
    margin: 0 0 10px 0;
    font-size: 1.3rem;
    font-weight: bold;
}

h2 span {
    margin: 0 0 0 10px;
    font-size: 1rem;
    font-weight: normal;
}

p {
    margin-top: 10px;
    font-size: 0.9rem;
    color: var(--addon-text);
}

p span {
    margin-right: 40px;
}

.nowrap p {
    margin: 0;
}

.animate section {
    transition: var(--fast-bg);
}

.animate p,
.animate h2 {
    transition: var(--fast);
}
</style>

<script setup>
import {computed} from "vue";
import moment from "moment";

const props = defineProps({
    addon: Object
});

const createdAt = computed(() => moment(props.addon.created_at));
const updatedAt = computed(() => moment(props.addon.updated_at));

function short(moment) {
    return moment.fromNow();
}

function full(moment) {
    return moment.format('MMMM D, YYYY @ hh:mm a zz');
}
</script>
