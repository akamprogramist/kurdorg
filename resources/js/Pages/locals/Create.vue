<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    description: null,
    location: null,
});
form.defaults("image", "updated-default@example.com");
</script>

<template>
    <p>Create A local Organization</p>
    <form
        @submit.prevent="
            form.post('/localNGOs', {
                onSuccess: () => form.reset(),
            })
        "
    >
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

        <input
            v-model="form.location"
            type="text"
            id="location"
            name="location"
            class="border"
        />
        <button type="submit">submit</button>
    </form>
</template>
