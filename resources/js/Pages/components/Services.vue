<template>
    <Container class="bg-gray-100">
        <div class="text-center space-y-1 pt-10">
            <p class="font-medium uppercase">Lorem ipsa amet.</p>
            <p class="text-3xl font-bold capitalize">
                find Opportunities around the world
            </p>
        </div>
        <div class="grid gap-10 py-10 md:flex">
            <a href="/localNGOs" class="group duration-300">
                <div
                    class="flex px-5 py-6 bg-white group-hover:bg-redsh space-x-5 rounded-lg duration-300"
                >
                    <i
                        class="fa-solid fa-building-ngo mt-1 text-redsh text-5xl group-hover:text-white"
                    ></i>
                    <div class="block space-y-2">
                        <p class="text-lg font-bold group-hover:text-white">
                            Local NGOs
                        </p>
                        <p
                            class="font-medium text-gray-500 group-hover:text-white"
                        >
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicingelit
                        </p>
                    </div>
                </div>
            </a>
            <a href="/localNGOs" class="group duration-300">
                <div
                    class="flex px-5 py-6 bg-white group-hover:bg-yellowsh space-x-5 rounded-lg duration-300"
                >
                    <i
                        class="fa-solid fa-building-un mt-1 text-yellowsh text-5xl group-hover:text-white"
                    ></i>
                    <div class="block space-y-2">
                        <p class="text-lg font-bold group-hover:text-white">
                            International NGOs
                        </p>
                        <p
                            class="font-medium text-gray-500 group-hover:text-white"
                        >
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicingelit
                        </p>
                    </div>
                </div>
            </a>
            <a href="/localNGOs" class="group duration-300">
                <div
                    class="flex px-5 py-6 bg-white group-hover:bg-bluesh space-x-5 rounded-lg duration-300"
                >
                    <i
                        class="fa-solid fa-briefcase mt-1 text-bluesh text-5xl group-hover:text-white"
                    ></i>
                    <div class="block space-y-2">
                        <p class="text-lg font-bold group-hover:text-white">
                            Opportunities
                        </p>
                        <p
                            class="font-medium text-gray-500 group-hover:text-white"
                        >
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicingelit
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
        title: "",
        description: "",
    },
    {
        title: "International NGOs",
        description: "Lorem, ipsum dolor sit amet consectetur adipisicingelit",
        icon: "fa-building-un",
        color: "yellowsh",
    },
    {
        title: "Opportunities",
        description: "Lorem, ipsum dolor sit amet consectetur adipisicingelit",
        icon: "fa-briefcase",
        color: "bluesh",
    },
];
</script>
