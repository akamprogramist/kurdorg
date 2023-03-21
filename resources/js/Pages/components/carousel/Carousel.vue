<template>
    <div class="flex justify-center">
        <div class="relative w-full h-[200px] overflow-hidden md:h-[400px]">
            <CarouselIndicators
                v-if="indicators"
                :total="slides.length"
                :current-index="currentSlide"
                @switch="switchSlide($event)"
            ></CarouselIndicators>
            <CarouselItem
                v-for="(slide, index) in slides"
                :key="`item-${index}`"
                :slide="slide"
                :current-slide="currentSlide"
                :direction="direction"
                :index="index"
                @mouseenter="stopSlideTimer"
                @mouseout="startSlideTimer"
            ></CarouselItem>
            <CarouselControls
                v-if="controls"
                @prev="prev"
                @next="next"
            ></CarouselControls>
        </div>
    </div>
</template>
<script setup>
import { ref, onMounted, onBeforeMount } from "vue";
import CarouselItem from "./CarouselItem.vue";
import CarouselControls from "./CarouselControls.vue";
import CarouselIndicators from "./CarouselIndicators.vue";
const props = defineProps({
    slides: {
        type: Array,
        required: true,
    },
    controls: {
        type: Boolean,
        default: false,
    },
    indicators: {
        type: Boolean,
        default: false,
    },
    interval: {
        type: Number,
        default: 5000,
    },
});
const currentSlide = ref(0);
const slideInterval = ref(null);
const direction = ref("right");
function setCurrentSlide(index) {
    currentSlide.value = index;
}
function prev(step = -1) {
    const index =
        currentSlide.value > 0
            ? currentSlide.value + step
            : props.slides.length - 1;
    setCurrentSlide(index);
    direction.value = "left";
    startSlideTimer();
}
function _next(step = 1) {
    const index =
        currentSlide.value < props.slides.length - 1
            ? currentSlide.value + step
            : 0;
    setCurrentSlide(index);
    direction.value = "right";
}
function next(step = 1) {
    _next(step);
    startSlideTimer();
}
function startSlideTimer() {
    stopSlideTimer();
    slideInterval.value = setInterval(() => {
        _next();
    }, props.interval);
}
function stopSlideTimer() {
    clearInterval(slideInterval.value);
}
function switchSlide(index) {
    const step = index - currentSlide.value;
    if (step > 0) {
        next(step);
    } else {
        prev(step);
    }
}
onMounted(() => {
    startSlideTimer();
}),
    onBeforeMount(() => {
        stopSlideTimer();
    });
</script>
