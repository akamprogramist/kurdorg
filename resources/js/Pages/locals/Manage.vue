<script setup>
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
import Pagination from "../components/Pagination.vue";
const props = defineProps({ locals: Object });
</script>
<template>
    <AdminLayout>
        <p class="text-3xl text-slate-700 text-center mb-5 font-bold">
            Organizations
        </p>
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
                            <a
                                href="#"
                                class="font-medium text-blue-600 hover:underline"
                                >Edit</a
                            >
                            <a
                                href="#"
                                class="font-medium text-red-600 hover:underline"
                                >Remove</a
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <pagination class="mt-6" :links="locals.links" />
    </AdminLayout>
</template>
