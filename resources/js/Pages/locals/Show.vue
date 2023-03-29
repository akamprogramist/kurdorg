<template>
    <p>hi {{ local.id }}</p>
</template>
<script setup>
defineProps({ local: Object });
</script>
