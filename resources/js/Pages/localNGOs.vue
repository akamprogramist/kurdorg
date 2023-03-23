<template>
    <Layout>
        <Container>
            <Filter />
            <Cards />
        </Container>
    </Layout>
</template>
<script setup>
import Cards from "./components/Cards.vue";
import Filter from "./components/Filter.vue";
import Container from "./layout/Container.vue";
import Layout from "./layout/Layout.vue";
</script>
