<template>
    <div
        class="flex relative py-6 px-6 md:py-2 md:px-36 shadow justify-between items-center"
    >
        <div class="text-xl uppercase font-semibold">
            <p>kurdorg</p>
        </div>
        <header v-if="user">You are {{ user.name }}</header>
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
                <div
                    v-if="!user"
                    v-for="link in links"
                    class="text-lg font-semibold capitalize mx-3 my-5"
                >
                    <Link
                        :href="link.link"
                        class="text-white opacity-100 md:text-black hover:opacity-60 duration-150"
                        >{{ link.name }}
                    </Link>
                </div>

                <div v-else class="md:flex">
                    <li class="text-lg font-semibold capitalize mx-3 my-5">
                        <Link
                            href="/dashboard"
                            class="text-white opacity-100 md:text-black hover:opacity-60 duration-150"
                            >Manage
                        </Link>
                    </li>
                    <li class="text-lg font-semibold capitalize mx-3 my-5">
                        <Link
                            href="/logout"
                            method="delete"
                            as="button"
                            class="text-white opacity-100 md:text-black hover:opacity-60 duration-150"
                            >Logout
                        </Link>
                    </li>
                    <li class="text-lg font-semibold capitalize mx-3 my-5">
                        <Link
                            href="/localNGOs"
                            class="text-white opacity-100 md:text-black hover:opacity-60 duration-150"
                            >LocalNGOs
                        </Link>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
const user = computed(() => usePage().props.auth.user);

let links = [
    { name: "Home", link: "/" },
    { name: "Local NGOs", link: "/localNGOs" },
    { name: "International NGOs", link: "/internationalNGOs" },
    { name: "Opportunities", link: "/opportunities" },
    { name: "Call for proposals", link: "/call" },
    { name: "News", link: "/news" },
    { name: "Register", link: "/register" },
    { name: "Login", link: "/login" },
];
let open = ref(false);
function MenuOpen() {
    open.value = !open.value;
}
</script>
