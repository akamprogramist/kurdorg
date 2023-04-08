<script setup>
import { router, Link } from "@inertiajs/vue3";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
import Pagination from "../components/Pagination.vue";
import Button from "../components/Button.vue";
import Flash from "../components/Flash.vue";
const props = defineProps({ locals: Object });
function destroy(id) {
    if (confirm("Are you sure you want to delete this organization?")) {
        router.delete(`/localNGOs/${id}`);
    }
}
</script>
<template>
    <AdminLayout>
        <div class="flex justify-between items-center my-5 px-5">
            <p class="text-3xl text-slate-700 text-center font-bold">
                LocalNGOs
            </p>
            <Flash />
            <Link
                href="/localNGOs/create"
                class="bg-bluesh text-white font-semibold py-2 px-5 rounded hover:opacity-80"
                >Create LocalNGO</Link
            >
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text- text-gray-700 capitalize bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4"></th>
                        <th scope="col" class="px-6 py-3">LocalNGOs Name</th>
                        <th scope="col" class="px-6 py-3">location</th>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Accesories</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(local, index) in locals.data"
                        :key="index"
                        class="bg-white border-b hover:bg-gray-50"
                    >
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input
                                    id="checkbox-table-search-1"
                                    type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                                />
                                <label
                                    for="checkbox-table-search-1"
                                    class="sr-only"
                                    >checkbox</label
                                >
                            </div>
                        </td>
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                        >
                            {{ local.name }}
                        </th>
                        <td class="px-6 py-4">{{ local.location }}</td>
                        <td class="px-6 py-4">{{ local.id }}</td>
                        <td class="px-6 py-4">Yes</td>
                        <td class="flex items-center px-6 py-4 space-x-3">
                            <Button
                                @click="destroy(local.id)"
                                class="bg-redsh hover:opacity-70 text-base rounded-none py-1"
                            >
                                Delete
                            </Button>
                            <Link
                                :href="`/localNGOs/${local.id}/edit`"
                                class="bg-yellowsh text-white hover:opacity-70 text-base rounded-none py-1 px-6"
                            >
                                Edit
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <pagination class="mt-6" :links="locals.links" />
    </AdminLayout>
</template>
