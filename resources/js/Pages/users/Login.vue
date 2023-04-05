<script setup>
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
});
function submit() {
    form.post("/users/authenticate", {
        onSuccess: () => form.reset(),
        onError: (errors) => {
            errors.email;
        },
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
                    <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
                    <p class="mb-4">Login into your account</p>
                </header>

                <form @submit.prevent="submit">
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
                        <div v-if="$page.props.flash.message">
                            {{ $page.props.flash.message }}
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
                    </div>

                    <div class="mb-6">
                        <button
                            type="submit"
                            class="bg-bluesh text-white rounded py-2 px-4 hover:opacity-75 duration-150"
                        >
                            Login
                        </button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Don't have an account?
                            <a href="/register" class="text-redsh">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </Container>
    </Layout>
</template>
