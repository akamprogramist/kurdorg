<template>
    <AdminLayout>
        <p>welcome {{ user.name }}</p>
    </AdminLayout>
</template>

<script setup>
import { computed } from "vue";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
import { usePage } from "@inertiajs/vue3";
const user = computed(() => usePage().props.auth.user);
</script>
