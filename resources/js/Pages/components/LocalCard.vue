<script setup>
import Button from "./Button.vue";
defineProps({ local: Object });
</script>

<template>
    <!-- <p class="text-3xl text-center text-slate-700 mb-5 font-bold">
            Be a Business Partner
        </p> -->

    <div class="rounded-lg border hover:shadow-3xl border-gray-10 duration-300">
        <img
            alt="Office"
            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            class="rounded-t-lg h-56 w-full object-cover"
        />

        <div class="p-4 sm:p-6">
            <a href="#">
                <h3 class="text-2xl font-bold text-gray-900">
                    {{ local.name }}
                </h3>
            </a>

            <p class="my-4 text-sm leading-relaxed text-gray-500 line-clamp-3">
                {{ local.description }}
            </p>
            <div class="flex space-x-2 items-center text-gray-500">
                <i class="fa-solid fa-location-dot mt-0.5"></i>
                <p class="font-bold capitalize">{{ local.location }}</p>
            </div>
            <a
                href="#"
                class="group mt-6 flex gap-1 text-sm font-medium justify-between text-bluesh items-center"
            >
                <Button
                    class="bg-bluesh hover:bg-yellowsh text-base rounded-none py-2 px-6"
                >
                    View More
                </Button>
                <i class="fa-regular fa-heart text-xl hover:text-yellowsh"></i>
            </a>
        </div>
    </div>
    <!-- <div class="flex justify-center">
            <Button
                class="mt-10 justify-center hover:bg-bluesh hover:opacity-70"
                >see more</Button
            >
        </div> -->
</template>
