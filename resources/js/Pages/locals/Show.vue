<template>
    <h1>this is post {{ local.id }}</h1>
</template>
<script setup>
defineProps({ local: Object });
</script>
