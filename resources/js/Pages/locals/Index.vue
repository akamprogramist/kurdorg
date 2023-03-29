<template>
    <Layout>
        <Container class="my-10 space-y-5">
            <Filter v-model="search" />
            <div class="py-5 grid md:grid-cols-3 gap-6">
                <div v-for="(local, index) in locals" :key="index">
                    <LocalCard :local="local" />
                </div>
            </div>
        </Container>
    </Layout>
</template>

<script setup>
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import Filter from "../components/Filter.vue";
import LocalCard from "../components/LocalCard.vue";
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
const porps = defineProps({ locals: Object, filters: Object });
const search = ref(porps.filters.search);
watch(search, (value) => {
    router.get(
        "/localNGOs",
        { search: value },
        {
            preserveState: true,
        }
    );
});
</script>
