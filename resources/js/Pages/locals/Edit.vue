<script setup>
import { useForm } from "@inertiajs/vue3";
const props = defineProps({ local: Object });
const form = useForm({
    name: props.local.name,
    description: props.local.description,
    location: props.local.location,
    image: props.local.image,
});
function submit() {
    form.post(`/localNGOs/${props.local.id}`, {
        onSuccess: () => form.reset(),
    });
}
</script>

<template>
    <p>Create A local Organization</p>
    <form @submit.prevent="submit">
        <input
            v-model="form.name"
            id="name"
            type="text"
            name="name"
            class="border"
        />
        <div v-if="form.errors.name">{{ form.errors.name }}</div>

        <input
            v-model="form.description"
            type="text"
            id="description"
            name="description"
            class="border"
        />

        <select v-model="form.location" name="location" id="location">
            <option value="sulaymaniah">sulaymaniah</option>
            <option value="halabja">halabja</option>
            <option value="erbil">erbil</option>
            <option value="duhok">duhok</option>
            <option value="karkuk">karkuk</option>
        </select>

        <input type="file" @input="form.image = $event.target.files[0]" />
        <progress
            v-if="form.progress"
            :value="form.progress.percentage"
            max="100"
        >
            {{ form.progress.percentage }}%
        </progress>
        <button type="submit">submit</button>
    </form>
</template>
