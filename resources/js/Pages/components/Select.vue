<template>
    <select
        class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5"
        name="cities"
        id="cities"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    >
        <slot />
    </select>
</template>

<script setup>
defineProps(["modelValue"]);
defineEmits(["update:modelValue"]);
</script>
