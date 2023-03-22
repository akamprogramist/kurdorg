<template>
    <carousel
        :items-to-show="1"
        :autoplay="3000"
        wrapAround
        pauseAutoplayOnHover
    >
        <slide v-for="slide in slides" :key="slide">
            <img :src="slide" alt="" />
        </slide>

        <template #addons>
            <navigation />
            <pagination />
        </template>
    </carousel>
</template>

<script setup>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
const slides = [
    "https://picsum.photos/id/1032/900/400",
    "https://picsum.photos/id/1033/900/400",
    "https://picsum.photos/id/1037/900/400",
    "https://picsum.photos/id/1035/900/400",
    "https://picsum.photos/id/1036/900/400",
];
</script>

<style scoped>
.carousel__pagination {
    position: absolute;
    bottom: 10px;
    left: 50%;
    right: 50%;
}
</style>
