<template>
    <div class="m-5 space-y-5">
        <!-- <button
                v-if="isOpen"
                @click="isOpen = false"
                class="fixed inset-0 w-full h-full cursor-default"
            ></button> -->

        <p class="text-3xl text-slate-700 font-bold">Find Organizations</p>
        <div>
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
        </div>
        <!-- <input
                @click="isOpen = !isOpen"
                class="relative z-10 text-2xl font-extrabold w-full border-b-2 p-2 outline-none text-left placeholder:focus:text-gray-400 placeholder:text-blue-600"
                placeholder="Online Event"
            /> -->

        <!-- <div v-if="isOpen" class="relative z-10 shadow-3xl">
                <button
                    class="border-b-2 p-5 w-full text-left hover:bg-slate-300"
                >
                    use your location
                </button>
                <button class="p-5 w-full text-left hover:bg-slate-300">
                    online events
                </button>
            </div> -->
        <div
            class="list-none overflow-auto snap-x pb-2 text-gray-500 font-semibold"
        >
            <div class="flex min-w-max capitalize">
                <li
                    class="hover:bg-gray-100 px-5 py-1.5 rounded-lg cursor-pointer duration-150 active:text-white active:bg-black"
                >
                    All
                </li>
                <li
                    class="hover:bg-gray-100 px-5 py-1.5 rounded-lg cursor-pointer duration-150 active:text-white active:bg-black"
                >
                    technology
                </li>
                <li
                    class="hover:bg-gray-100 px-5 py-1.5 rounded-lg cursor-pointer duration-150 active:text-white active:bg-black"
                >
                    women
                </li>
                <li
                    class="hover:bg-gray-100 px-5 py-1.5 rounded-lg cursor-pointer duration-150 active:text-white active:bg-black"
                >
                    arts
                </li>
                <li
                    class="hover:bg-gray-100 px-5 py-1.5 rounded-lg cursor-pointer duration-150 active:text-white active:bg-black"
                >
                    agriculture
                </li>
                <li
                    class="hover:bg-gray-100 px-5 py-1.5 rounded-lg cursor-pointer duration-150 active:text-white active:bg-black"
                >
                    education
                </li>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from "vue";

const isOpen = ref(false);
</script>
