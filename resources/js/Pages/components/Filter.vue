<template>
    <div class="my-5 space-y-5">
        <p class="text-3xl text-slate-700 font-bold">Find Organizations</p>
        <div class="flex space-x-5">
            <select
                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5"
                name="cities"
                id="cities"
            >
                <option selected>all Cities</option>
                <option value="sulaymaniah">sulaymaniah</option>
                <option value="halabja">halabja</option>
                <option value="erbil">erbil</option>
                <option value="duhok">duhok</option>
                <option value="karkuk">karkuk</option>
            </select>
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
import { ref } from "vue";
const props = defineProps(["modelValue"]);
const emit = defineEmits(["update:modelValue"]);
</script>
