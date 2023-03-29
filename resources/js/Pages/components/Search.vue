<template>
    <input
        class="text-xl font-semibold rounded-lg border p-2 outline-none"
        autocomplete="off"
        name="search"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        placeholder="Search"
    />
</template>
<script setup>
const props = defineProps(["modelValue"]);
const emit = defineEmits(["update:modelValue"]);
</script>
