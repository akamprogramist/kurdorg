<template>
    <h1 v-if="isWishlisted">this is post {{ local.id }}</h1>
    <h1 v-else>this is post welcomeeeeee {{ local.id }}</h1>
</template>
<script setup>
defineProps({ local: Object, isWishlisted: Boolean });
</script>
