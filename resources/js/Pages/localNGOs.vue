<template>
    <Layout>
        <Container>
            <Filter />
            <Card />
        </Container>
    </Layout>
</template>
<script setup>
import Card from "./components/InternationalCard.vue";
import Filter from "./components/Filter.vue";
import Container from "./layout/Container.vue";
import Layout from "./layout/Layout.vue";
</script>
