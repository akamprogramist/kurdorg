<template>
    <div class="fixed top-16 w-56 text-right">
        <Menu as="div" class="relative inline-block">
            <div class="group">
                <MenuButton
                    class="inline-flex items-center px-4 py-2 font-medium group-hover:opacity-50"
                >
                    a
                    <ChevronDownIcon class="ml-2 h-5 w-5" aria-hidden="true" />
                </MenuButton>
            </div>

            <transition
                enter-active-class="transition duration-100 ease-out"
                enter-from-class="transform scale-95 opacity-0"
                enter-to-class="transform scale-100 opacity-100"
                leave-active-class="transition duration-75 ease-in"
                leave-from-class="transform scale-100 opacity-100"
                leave-to-class="transform scale-95 opacity-0"
            >
                <MenuItems class="absolute right-0 rounded bg-white shadow">
                    <div class="py-2">
                        <MenuItem>
                            <button
                                class="w-full text-left px-5 items-center py-2 text-sm hover:bg-slate-100"
                            >
                                akamprogramist
                            </button>
                        </MenuItem>
                        <MenuItem>
                            <button
                                class="w-full text-left px-5 items-center py-2 text-sm hover:bg-slate-100"
                            >
                                Edit
                            </button>
                        </MenuItem>
                    </div>
                </MenuItems>
            </transition>
        </Menu>
    </div>
</template>

<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import { ChevronDownIcon } from "@heroicons/vue/20/solid";
const props = defineProps({
    username: String,
});
</script>
