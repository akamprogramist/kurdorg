<script setup>
import { Link } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import Dropdown from "../../components/Dropdown.vue";
let open = ref(false);
function MenuOpen() {
    open.value = !open.value;
}
const user = computed(() => usePage().props.auth.user);
</script>
<template>
    <nav class="fixed top-0 w-full z-10 bg-white border-b border-gray-200">
        <div class="px-3 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center ml-5 space-x-8">
                    <span
                        @click="MenuOpen()"
                        class="md:hidden cursor-pointer text-3xl"
                    >
                        <i
                            :class="[
                                open
                                    ? 'fa-solid fa-xmark pr-[7.5px]'
                                    : 'fa-solid fa-bars',
                            ]"
                        ></i>
                    </span>

                    <span
                        v-if="open"
                        @click="MenuOpen()"
                        class="fixed bg-black opacity-30 w-full h-full right-0 top-[65px]"
                    >
                    </span>
                    <Link href="/">
                        <span
                            class="text-xl font-semibold sm:text-2xl whitespace-nowrap"
                            >Kurdorg</span
                        >
                    </Link>
                </div>
                <Dropdown :title="`${user.name}`">
                    <template #MenuItem>
                        <div class="capitalize">
                            <Link href="/localNGOs/manage">
                                <div
                                    class="w-full text-left px-5 items-center py-2 text-sm hover:bg-bluesh hover:text-white"
                                >
                                    Manage LocalNGOs
                                </div>
                            </Link>
                            <Link href="/users/manage">
                                <div
                                    class="w-full text-left px-5 items-center py-2 text-sm hover:bg-bluesh hover:text-white"
                                >
                                    Manage Users
                                </div>
                            </Link>
                            <Link
                                href="/logout"
                                method="delete"
                                as="button"
                                class="w-full"
                            >
                                <div
                                    class="w-full text-left px-5 items-center py-2 text-sm hover:bg-bluesh hover:text-white"
                                >
                                    Logout
                                </div>
                            </Link>
                        </div>
                    </template>
                </Dropdown>
            </div>
        </div>
    </nav>
    <!-- sidebar  -->
    <aside
        id="logo-sidebar"
        class="fixed top-[65px] z-50 left-0 w-64 h-screen pt-5 transition-transform bg-white border-r border-gray-200 md:translate-x-0"
        :class="[open ? '' : '-translate-x-full']"
        aria-label="Sidebar"
    >
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
            <ul class="space-y-2">
                <li>
                    <Link
                        href="/dashboard"
                        class="flex items-center p-2 text-base font-normal text-gray-700 rounded-lg"
                        :class="{
                            'bg-bluesh text-white': $page.url === '/dashboard',
                        }"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 transition duration-75"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"
                            ></path>
                            <path
                                d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                            ></path>
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/localNGOs/manage"
                        class="flex items-center p-2 text-base font-normal text-gray-700 rounded-lg"
                        :class="{
                            'bg-bluesh text-white':
                                $page.url === '/localNGOs/manage',
                        }"
                    >
                        <svg
                            aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 transition duration-75"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                            ></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >LocalNGOs</span
                        >
                    </Link>
                </li>
                <li>
                    <Link
                        href="/users/manage"
                        class="flex items-center p-2 text-base font-normal text-gray-700 rounded-lg"
                        :class="{
                            'bg-bluesh text-white':
                                $page.url === '/users/manage',
                        }"
                    >
                        <svg
                            aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 transition duration-75"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </Link>
                </li>
                <!-- <li>
                    <Link
                        href="/sells"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg"
                    >
                        <svg
                            aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6  transition duration-75 group-hover:text-gray-900"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Show Sold Medicines</span
                        >
                    </Link>
                </li>
                <li>
                    <Link
                        href="/sells/create"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg"
                    >
                        <svg
                            aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Sell Medicines</span
                        >
                    </Link>
                </li> -->
            </ul>
        </div>
    </aside>
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <slot />
        </div>
    </div>
</template>
