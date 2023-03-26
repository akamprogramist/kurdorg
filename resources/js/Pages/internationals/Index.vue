<template>
    <Layout>
        <Container class="my-10 space-y-5">
            <p class="text-3xl text-slate-700 font-bold">
                Find International Organizations
            </p>
            <div class="py-5 grid md:grid-cols-3 gap-6">
                <div
                    v-for="(international, index) in internationals"
                    :key="index"
                >
                    <Card :international="international" />
                </div>
            </div>
        </Container>
    </Layout>
</template>

<script setup>
import Card from "../components/InternationalCard.vue";
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
defineProps({ internationals: Object });
</script>
