<script setup>
import { ref, watch } from "vue";
import { router, Link } from "@inertiajs/vue3";
import Pagination from "../components/Pagination.vue";
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
import Search from "../components/Search.vue";
import Select from "../components/Select.vue";
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
function addFavorite(id) {
    router.post(`/favorite/${id}`, {
        local_id: id,
    });
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
                            :src="`${
                                local.image
                                    ? `storage/${local.image}`
                                    : `storage/images/no-image.jpg`
                            }   `"
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
                            <div class="flex justify-between items-center mt-5">
                                <Link
                                    :href="`/localNGOs/${local.id}`"
                                    class="bg-bluesh text-white hover:opacity-70 text-base rounded-none py-2 px-6"
                                >
                                    View More
                                </Link>
                                <div
                                    class="hover:opacity-70 items-center text-base text-bluesh rounded-none py-2 px-6"
                                >
                                    <i class="fa-solid fa-eye"></i>
                                    {{ local.count }}
                                </div>
                                <button
                                    v-if="isFavorite"
                                    @click="removeFavorite(local.id)"
                                    type="submit"
                                >
                                    <i
                                        class="fa-solid fa-heart text-xl text-bluesh hover:text-yellowsh"
                                    ></i>
                                </button>
                                <button
                                    @click="addFavorite(local.id)"
                                    type="submit"
                                >
                                    <i
                                        class="fa-regular fa-heart text-xl text-bluesh hover:text-yellowsh"
                                    ></i>
                                </button>
                            </div>
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
