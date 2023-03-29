<script setup>
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import Filter from "../components/Filter.vue";
import Pagination from "../components/Pagination.vue";
import Container from "../layout/Container.vue";
import Layout from "../layout/Layout.vue";
import Button from "../components/Button.vue";
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
        { search: value },
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
        { location: location.value },
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
            <select
                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5"
                name="cities"
                id="cities"
                v-model="location"
                @change="getlocation"
            >
                <option value="all">all Cities</option>
                <option value="sulaymaniah">sulaymaniah</option>
                <option value="halabja">halabja</option>
                <option value="erbil">erbil</option>
                <option value="duhok">duhok</option>
                <option value="karkuk">karkuk</option>
            </select>
            <Filter v-model="search" />
            <div class="py-5 grid md:grid-cols-3 gap-6">
                <div v-for="(local, index) in locals.data" :key="index">
                    <div
                        class="rounded-lg border hover:shadow-3xl border-gray-10 duration-300"
                    >
                        <img
                            alt="Office"
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="rounded-t-lg h-56 w-full object-cover"
                        />

                        <div class="p-4 sm:p-6">
                            <a href="#">
                                <h3 class="text-2xl font-bold text-gray-900">
                                    {{ local.name }}
                                </h3>
                            </a>

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
            </div>
            <Pagination class="mt-6" :links="locals.links" />
        </Container>
    </Layout>
</template>
