<template>
    <div class="my-5 space-y-5">
        <p class="text-3xl text-slate-700 font-bold">Find Organizations</p>
        <div class="flex space-x-5">
            <input
                class="text-xl font-semibold rounded-lg border p-2 outline-none"
                autocomplete="off"
                name="search"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
                placeholder="Search"
            />
        </div>
    </div>
</template>
<script setup>
const props = defineProps(["modelValue"]);
const emit = defineEmits(["update:modelValue"]);
</script>
