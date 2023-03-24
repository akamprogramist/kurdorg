<template>
    <Layout>
        <Container class="my-5 space-y-5">
            <p class="text-3xl text-slate-700 font-bold">
                Find International Organizations
            </p>
            <Cards />
        </Container>
    </Layout>
</template>

<script setup>
import Cards from "./components/Cards.vue";
import Container from "./layout/Container.vue";
import Layout from "./layout/Layout.vue";
</script>
