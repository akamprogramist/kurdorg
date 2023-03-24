<template>
    <Layout>
        <Container>
            <div class="pb-10">
                <div class="text-center space-y-1 py-10 bg-white px-6 md:px-36">
                    <p class="font-semibold text-3xl">Call For Proposals</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor
                        sit amet consectetur adipisicing elit.
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
                                    company name
                                </p>
                                <p class="font-medium text-gray-500">
                                    Lorem, ipsum dolor sit amet consectetur
                                    adipisicingelit aseta
                                </p>
                                <div class="flex justify-between items-center">
                                    <p
                                        class="text-sm font-semibold capitalize text-blue-600"
                                    >
                                        4 days ago
                                    </p>
                                    <div
                                        class="flex space-x-2 items-center"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-10 flex justify-center">
                    <Button class="bg-blue-600 hover:bg-blue-700"
                        >see more</Button
                    >
                </div>
            </div>
        </Container>
    </Layout>
</template>
<script setup>
import Button from "./components/Button.vue";
import Container from "./layout/Container.vue";
import Layout from "./layout/Layout.vue";
</script>
