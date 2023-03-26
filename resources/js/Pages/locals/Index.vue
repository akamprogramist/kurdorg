<template>
    <Layout>
        <Container class="my-10 space-y-5">
            <Filter />
            <div class="py-5 grid md:grid-cols-3 gap-6">
                <div v-for="(local, index) in locals" :key="index">
                    <LocalCard :local="local" />
                </div>
            </div>
        </Container>
    </Layout>
</template>

<script setup>
import Filter from "../components/Filter.vue";
import LocalCard from "../components/LocalCard.vue";
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
defineProps({ locals: Object });
</script>
