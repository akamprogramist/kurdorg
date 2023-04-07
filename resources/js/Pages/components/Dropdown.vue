<template>
    <Menu as="div" class="relative">
        <div class="group">
            <MenuButton
                class="flex justify-between items-center py-2 capitalize font-medium group-hover:opacity-50"
            >
                {{ title }}
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
            <MenuItems class="absolute w-max right-0 rounded bg-white shadow">
                <div class="py-2">
                    <slot name="MenuItem">
                        <MenuItem>
                            <slot />
                        </MenuItem>
                    </slot>
                </div>
            </MenuItems>
        </transition>
    </Menu>
</template>

<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import { ChevronDownIcon } from "@heroicons/vue/20/solid";
const props = defineProps({
    title: String,
});
</script>
