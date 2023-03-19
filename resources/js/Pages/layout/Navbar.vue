<template>
    <div
        class="flex relative py-6 px-6 md:py-2 md:px-36 shadow justify-between items-center"
    >
        <div class="text-xl uppercase font-semibold">
            <p>kurdorg</p>
        </div>
        <div>
            <span @click="MenuOpen()" class="md:hidden cursor-pointer text-3xl">
                <i
                    :class="[open ? 'fa-solid fa-xmark' : 'fa-solid fa-bars']"
                ></i>
            </span>

            <span
                v-if="open"
                @click="MenuOpen()"
                class="fixed z-40 w-full h-full right-0 top-0"
            >
            </span>
            <ul
                class="absolute z-50 bg-redsh mt-2 md:mt-0 md:bg-white md:flex md:items-center md:px-0 px-5 md:pb-0 md:static md:w-auto w-full top-[75px] duration-500 ease-in"
                :class="[open ? 'left-0' : 'left-[-100%]']"
            >
                <li
                    v-for="link in links"
                    class="text-lg font-semibold capitalize mx-6 my-5"
                >
                    <a
                        :href="link.link"
                        class="text-white opacity-100 md:text-black hover:opacity-60 duration-150"
                        >{{ link.name }}</a
                    >
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
let open = ref(false);
let links = [
    { name: "Home", link: "#" },
    { name: "Organizations", link: "#" },
    { name: "Volunteers", link: "#" },
    { name: "Contact", link: "#" },
    { name: "About us", link: "#" },
];

function MenuOpen() {
    open.value = !open.value;
}
</script>
