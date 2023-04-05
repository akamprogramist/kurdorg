<template>
    <Navbar />
    <Flash />
    <slot />
    <Footer />
</template>

<script setup>
import Navbar from "./Navbar.vue";
import Footer from "./Footer.vue";
import Flash from "../components/Flash.vue";
</script>
