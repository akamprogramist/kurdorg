<script setup>
import { useForm, router } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    description: null,
    location: null,
    image: null,
});
function submit() {
    form.post("/localNGOs", {
        onSuccess: () => form.reset(),
    });
}
// router.post("/localNGOs", data, {
//     forceFormData: true,
// });
// form.defaults("image", "updated-default@example.com");
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

        <input
            v-model="form.location"
            type="text"
            id="location"
            name="location"
            class="border"
        />
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
