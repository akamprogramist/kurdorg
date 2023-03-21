<template>
  <button class="carousel-controls left" @click="$emit('prev')">Prev</button>
  <button class="carousel-controls right" @click="$emit('next')">Next</button>
</template>

<script setup>
const emits = defineEmits(["prev", "next"]);
</script>

<style scoped>
.carousel-controls {
  background-color: rgba(0, 0, 0, 0.5);
  border: none;
  display: inline-block;
  position: absolute;
  height: 50px;
  width: 70px;
  top: calc(50% - 25px);
  color: #f3f3f3;
  cursor: pointer;
}
.left {
  left: 0;
}
.right {
  right: 0;
}
</style>
