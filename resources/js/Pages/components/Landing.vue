<template>
    <div>
        <div class="relative">
            <img
                class="brightness-[0.30] md:w-full md:h-[600px] h-[500px] object-cover"
                src="../../../../storage/app/images/charity.jpg"
                alt=""
            />
            <div
                class="absolute inset-y-24 inset-x-5 text-white md:inset-x-36 md:inset-y-36"
            >
                <p class="capitalize text-5xl font-bold md:text-8xl">
                    think <span class="text-yellowsh text-6xl">&</span><br />
                    give charity
                </p>
                <p class="text-lg font-medium my-5 md:text-xl">
                    We are here to support every organization in kurdistan
                </p>
                <div
                    class="grid w-fit space-y-2 md:space-y-0 md:flex md:space-x-5"
                >
                    <Button
                        class="py-3 px-8 bg-yellowsh hover:bg-redsh md:py-4 md:px-12"
                    >
                        discover more</Button
                    >
                    <Button class="py-3 px-8 bg-redsh hover:bg-yellowsh">
                        Contact us</Button
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Button from "./Button.vue";
</script>
