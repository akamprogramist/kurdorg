<script setup>
import { ref, watch } from "vue";
import { router, Link } from "@inertiajs/vue3";
import Pagination from "../components/Pagination.vue";
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
import Button from "../components/Button.vue";
import Search from "../components/Search.vue";
import Select from "../components/Select.vue";
function destroy(id) {
    if (confirm("Are you sure you want to delete this organization?")) {
        router.delete(`/localNGOs/${id}`);
    }
}
const props = defineProps({ locals: Object, filters: Object });
const search = ref(props.filters.search);

watch(search, (value) => {
    router.get(
        "/localNGOs",
        { search: value, location: location.value },
        {
            preserveState: true,
            replace: true,
        }
    );
});
const location = ref("all");
function getlocation() {
    router.get(
        "/localNGOs",
        { location: location.value, search: search.value },
        {
            preserveState: true,
            replace: true,
        }
    );
}
</script>

<template>
    <Layout>
        <Container class="my-10 space-y-5">
            <p class="text-3xl text-slate-700 font-bold">Find Organizations</p>
            <div class="my-5 space-y-5">
                <div class="flex space-x-5">
                    <Select v-model="location" @change="getlocation">
                        <option value="all">all Cities</option>
                        <option value="sulaymaniah">sulaymaniah</option>
                        <option value="halabja">halabja</option>
                        <option value="erbil">erbil</option>
                        <option value="duhok">duhok</option>
                        <option value="karkuk">karkuk</option>
                    </Select>
                    <Search v-model="search" />
                </div>
            </div>
            <div class="py-5 grid md:grid-cols-3 gap-6">
                <div v-for="(local, index) in locals.data" :key="index">
                    <div
                        class="rounded-lg border hover:shadow-3xl border-gray-10 duration-300"
                    >
                        <img
                            alt="Office"
                            :src="local.image"
                            class="rounded-t-lg h-56 w-full object-cover"
                        />

                        <div class="p-4 sm:p-6">
                            <Link :href="`/localNGOs/${local.id}`">
                                <h3 class="text-2xl font-bold text-gray-900">
                                    {{ local.name }}
                                </h3>
                            </Link>

                            <p
                                class="my-4 text-sm leading-relaxed text-gray-500 line-clamp-3"
                            >
                                {{ local.description }}
                            </p>
                            <div
                                class="flex space-x-2 items-center text-gray-500"
                            >
                                <i class="fa-solid fa-location-dot mt-0.5"></i>
                                <p class="font-bold capitalize">
                                    {{ local.location }}
                                </p>
                            </div>
                            <a
                                href="#"
                                class="group mt-6 flex gap-1 text-sm font-medium justify-between text-bluesh items-center"
                            >
                                <Button
                                    class="bg-bluesh hover:bg-yellowsh text-base rounded-none py-2 px-6"
                                >
                                    View More
                                </Button>
                                <Button
                                    @click="destroy(local.id)"
                                    class="bg-redsh text-base rounded-none py-2 px-6"
                                >
                                    Delete
                                </Button>
                                <i
                                    class="fa-regular fa-heart text-xl hover:text-yellowsh"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div v-if="locals.data.length === 0">
                    <p
                        class="capitalize text-center my-10 text-2xl font-bold text-gray-700"
                    >
                        no organizations found
                    </p>
                </div>
            </div>
            <Pagination class="mt-6" :links="locals.links" />
        </Container>
    </Layout>
</template>
