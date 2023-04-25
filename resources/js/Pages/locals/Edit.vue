<script setup>
import { useForm, Link, usePage, Head } from "@inertiajs/vue3";
import { computed } from "vue";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
const user = computed(() => usePage().props.auth.user);
const props = defineProps({ locals: Object });
const form = useForm({
    name: props.locals.name,
    user_id: props.locals.user_id,
    description: props.locals.description,
    location: props.locals.location,
    status: props.locals.status,
    image: props.locals.image,
});
function submit() {
    form.post(`/localNGOs/${props.locals.id}`, {
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
    <Head title="Edit" />
    <p class="text-3xl text-slate-700 mb-5 font-bold">Update Local NGO</p>
    <form @submit.prevent="submit">
        <div class="space-y-5">
            <input
                v-model="form.user_id"
                id="user_id"
                type="text"
                name="user_id"
                class="border"
                disabled
            />
            <br />
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
            <br />
            <textarea
                cols="40"
                rows="4"
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
            <br />
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
            <br />
            <select
                v-if="user.role_id == 2"
                v-model="form.status"
                name="status"
                id="status"
            >
                <option value="pending">pending</option>
                <option value="accepted">accepted</option>
            </select>
            <div v-if="form.errors.status" class="text-red-500">
                {{ form.errors.status }}
            </div>
            <br />

            <!-- upload file input  -->

            <input @input="form.image = $event.target.files[0]" type="file" />
            <progress
                v-if="form.progress"
                :value="form.progress.percentage"
                max="100"
            >
                {{ form.progress.percentage }}%
            </progress>
            <br />
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
