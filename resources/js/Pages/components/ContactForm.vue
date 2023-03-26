<template>
    <Container class="bg-indigo-200 py-16 px-10">
        <div
            class="grid grid-cols-1 md:grid-cols-2 items-center rounded-xl p-10 bg-white"
        >
            <div>
                <div class="space-y-1">
                    <p class="text-3xl text-indigo-700 capitalize font-bold">
                        get In touch
                    </p>
                    <p>We are here to help you! can we help?</p>
                </div>
                <div class="my-10">
                    <div class="grid gap-5 md:grid-cols-2">
                        <input
                            type="text"
                            class="border px-3 py-2 bg-indigo-50 rounded-lg focus:outline-none"
                            placeholder="Enter your name"
                        />
                        <input
                            type="text"
                            class="border px-3 py-2 bg-indigo-50 rounded-lg focus:outline-none"
                            placeholder="Enter your name"
                        />
                        <textarea
                            name=""
                            id=""
                            class="border col-span-1 md:col-span-2 px-3 py-2 bg-indigo-50 rounded-lg focus:outline-none"
                            cols="30"
                            rows="5"
                            placeholder="Go ahead, We are listening"
                        ></textarea>
                    </div>
                    <input
                        type="submit"
                        class="py-3 my-5 rounded-lg text-white w-full bg-violet-500"
                        name=""
                        id=""
                    />
                </div>
            </div>
            <div class="">
                <img src="../../../../storage/app/images/undraw.png" alt="" />
                <!-- <div class="items-center mx-16 md:mx-40 space-y-5">
                    <div class="flex space-x-2 items-center">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="text-xl font-semibold capitalize">
                            sulaymaniah
                        </p>
                    </div>
                    <div class="flex space-x-2">
                        <i class="fa-solid fa-location"></i>
                        <p>07700656816</p>
                    </div>
                    <div class="flex space-x-2">
                        <i class="fa-solid fa-mail"></i>
                        <p>@kurdorg</p>
                    </div>
                </div> -->
            </div>
        </div>
    </Container>
</template>

<script setup>
import Container from "../layout/Container.vue";
</script>
