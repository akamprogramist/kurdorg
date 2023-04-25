<script setup>
import { computed } from "vue";
import { usePage, Head } from "@inertiajs/vue3";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
const user = computed(() => usePage().props.auth.user);
</script>
<script>
export default {
    layout: AdminLayout,
};
</script>
<template>
    <Head title="Dashboard" />
    <p>welcome {{ user.name }}</p>
</template>
