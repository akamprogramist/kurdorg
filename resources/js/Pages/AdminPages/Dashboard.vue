<template>
    <AdminLayout>
        <p>welcome {{ user.username }}</p>
        <Dropdown username="akam" />
    </AdminLayout>
</template>

<script setup>
import { computed } from "vue";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
import { usePage } from "@inertiajs/vue3";
import Dropdown from "../components/Dropdown.vue";
const user = computed(() => usePage().props.auth.user);
</script>
