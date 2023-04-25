<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
const user = computed(() => usePage().props.auth.user);
</script>
<template>
    <p>welcome {{ user.name }}</p>
</template>
