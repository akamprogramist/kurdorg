<script setup>
import { useForm, Link, Head } from "@inertiajs/vue3";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
const props = defineProps({ user: Object });
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
</script>
<script>
export default {
    layout: AdminLayout,
};
</script>
<template>
    <Head title="Create" />
    <p class="text-3xl text-slate-700 mb-5 font-bold">Create Local NGO</p>
    <form @submit.prevent="submit">
        <div>
            <input
                v-model="form.name"
                id="name"
                type="text"
                name="name"
                class="border"
                placeholder="name"
            />
            <div v-if="form.errors.name" class="text-red-500">
                {{ form.errors.name }}
            </div>
            <input
                v-model="form.description"
                type="text"
                id="description"
                name="description"
                class="border"
                placeholder="description"
            />
            <div v-if="form.errors.description" class="text-red-500">
                {{ form.errors.description }}
            </div>
            <select v-model="form.location" name="location" id="location">
                <option value="sulaymaniah">sulaymaniah</option>
                <option value="halabja">halabja</option>
                <option value="erbil">erbil</option>
                <option value="duhok">duhok</option>
                <option value="karkuk">karkuk</option>
            </select>
            <div v-if="form.errors.location" class="text-red-500">
                {{ form.errors.location }}
            </div>

            <!-- upload file input  -->

            <input @input="form.image = $event.target.files[0]" type="file" />
            <progress
                v-if="form.progress"
                :value="form.progress.percentage"
                max="100"
            >
                {{ form.progress.percentage }}%
            </progress>
            <!-- end upload file input  -->
            <div class="space-x-5">
                <button
                    class="bg-bluesh hover:opacity-75 text-white py-2 px-5 rounded capitalize"
                    type="submit"
                >
                    submit
                </button>
                <Link
                    href="/localNGOs/manage"
                    class="bg-redsh hover:opacity-75 text-white py-2 px-5 rounded capitalize"
                    type="submit"
                >
                    back
                </Link>
            </div>
        </div>
    </form>
</template>
