<script setup>
import { Link } from "@inertiajs/vue3";

import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});
function submit() {
    form.post("/users", {
        onSuccess: () => form.reset(),
    });
}
</script>
<template>
    <Layout>
        <Container>
            <div
                class="p-10 max-w-lg mx-auto my-24 bg-gray-50 border border-gray-200 rounded"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
                    <p class="mb-4">Create an account</p>
                </header>

                <form @submit.prevent="submit">
                    <div class="mb-6">
                        <label for="name" class="inline-block text-lg mb-2">
                            Name
                        </label>
                        <input
                            v-model="form.name"
                            type="text"
                            id="name"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                        />
                        <div v-if="form.errors.name">
                            {{ form.errors.name }}
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2"
                            >Email</label
                        >
                        <input
                            v-model="form.email"
                            id="email"
                            type="email"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="email"
                        />
                        <div v-if="form.errors.email">
                            {{ form.errors.email }}
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="inline-block text-lg mb-2">
                            Password
                        </label>
                        <input
                            v-model="form.password"
                            id="password"
                            type="password"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="password"
                        />
                        <div v-if="form.errors.password">
                            {{ form.errors.password }}
                        </div>
                    </div>

                    <div class="mb-6">
                        <label
                            for="password_confirmation"
                            class="inline-block text-lg mb-2"
                        >
                            Confirm Password
                        </label>
                        <input
                            v-model="form.password_confirmation"
                            id="password_confirmation"
                            type="password"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="password_confirmation"
                        />
                        <div v-if="form.errors.password_confirmation">
                            {{ form.errors.password_confirmation }}
                        </div>
                    </div>

                    <div class="mb-6">
                        <button
                            type="submit"
                            class="bg-bluesh text-white rounded py-2 px-4 hover:opacity-75 duration-150"
                        >
                            Sign Up
                        </button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Already have an account?
                            <Link href="/login" class="text-redsh">Login</Link>
                        </p>
                    </div>
                </form>
            </div>
        </Container>
    </Layout>
</template>
