<template>
    <Layout>
        <Container class="bg-indigo-200">
            <div class="pt-20">
                <p class="font-medium text-sm uppercase text-zinc-700 mb-1">
                    never sit at home again
                </p>
                <p class="font-bold capitalize text-3xl text-zinc-700 mb-3">
                    find oppoprtunities in Organizations
                </p>
                <p class="text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Possimus obcaecati molestias quas sunt cupiditate, nostrum
                    accusantium nulla qui
                </p>
                <div class="py-10 items-center md:grid md:grid-cols-2 md:gap-5">
                    <div class="flex mb-5 md:mb-0">
                        <i
                            class="fa-solid fa-location-dot py-4 rounded-l-lg px-5 bg-white text-lg"
                        ></i>
                        <select
                            id="countries"
                            class="border-none text-gray-400 py-4 capitalize font-semibold rounded-r-lg focus:outline-none w-full"
                        >
                            <option value="sulaymaniah">Sulaymaniah</option>
                            <option value="">Halabja</option>
                            <option value="">Erbil</option>
                            <option value="">Dhok</option>
                        </select>
                    </div>
                    <div class="flex">
                        <i
                            class="fa-solid fa-search py-4 rounded-l-lg px-5 bg-white text-lg"
                        ></i>
                        <input
                            type="search"
                            class="w-full py-4 rounded-r-lg font-semibold focus:outline-none"
                            placeholder="Find Opportunities"
                        />
                    </div>
                </div>
            </div>
        </Container>
        <div class="py-10 bg-white px-6 md:px-36">
            <div class="text-center space-y-1 py-10 bg-white px-6 md:px-36">
                <p class="font-semibold text-3xl">Newest opportunities</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit
                    amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <a
                    v-for="(item, index) in 3"
                    :key="index"
                    href="/localNGOs"
                    class="group duration-300"
                >
                    <div
                        class="flex px-5 py-5 shadow bg-white group-hover:bg-gray-100 space-x-5 rounded-lg duration-300"
                    >
                        <!-- <img
                        class="rounded-full h-14 w-14"
                        src="https://images.unsplash.com/photo-1679663877752-c00ad7f1c5c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                        alt=""
                    /> -->
                        <div class="block space-y-1">
                            <p
                                class="text-lg capitalize text-blue-600 font-bold"
                            >
                                web developer
                            </p>
                            <p class="font-medium text-gray-500">
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicingelit aseta
                            </p>
                            <div class="flex justify-between items-center">
                                <p class="font-bold capitalize text-blue-600">
                                    volunteer
                                </p>
                                <div class="flex space-x-2 items-center">
                                    <i
                                        class="fa-solid fa-location-dot mt-0.5"
                                    ></i>
                                    <p class="font-bold capitalize text-black">
                                        Erbil
                                    </p>
                                </div>
                                <p class="font-bold capitalize text-black">
                                    Part time
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mt-10 flex justify-center">
                <Button class="bg-blue-600 hover:bg-blue-700">see more</Button>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Container from "./layout/Container.vue";
import Layout from "./layout/Layout.vue";
import Button from "./components/Button.vue";
</script>
