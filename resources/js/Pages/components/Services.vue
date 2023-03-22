<template>
    <Container class="bg-gray-200">
        <div class="py-5">
            <a
                v-for="(service, index) in Services"
                :key="index"
                href="/localNGOs"
            >
                <div class="flex px-5 py-6 bg-white space-x-5 rounded-lg my-16">
                    <i
                        class="fa-solid mt-1 text-5xl text-redsh"
                        :class="service.icon"
                    ></i>
                    <div class="block space-y-2">
                        <p class="text-lg font-bold">{{ service.title }}</p>
                        <p class="font-medium text-gray-500">
                            {{ service.description }}
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </Container>
</template>

<script setup>
import Container from "../layout/Container.vue";

let Services = [
    {
        title: "Local NGOs",
        description: "Lorem, ipsum dolor sit amet consectetur adipisicingelit",
        icon: "fa-building-ngo",
    },
    {
        title: "International NGOs",
        description: "Lorem, ipsum dolor sit amet consectetur adipisicingelit",
        icon: "fa-building-un",
    },
    {
        title: "Opportunities",
        description: "Lorem, ipsum dolor sit amet consectetur adipisicingelit",
        icon: "fa-briefcase",
    },
];
</script>
