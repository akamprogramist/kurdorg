<script setup>
import { router, Link } from "@inertiajs/vue3";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
import Pagination from "../components/Pagination.vue";
import Button from "../components/Button.vue";
import Flash from "../components/Flash.vue";
const props = defineProps({ users: Object });
function destroy(id) {
    if (confirm("Are you sure you want to delete this user?")) {
        router.delete(`/users/${id}`);
    }
}
</script>
<template>
    <AdminLayout>
        <div class="flex justify-between items-center my-5 px-5">
            <p class="text-3xl text-slate-700 text-center font-bold">Users</p>
            <Flash />
            <Link
                href="/users/create"
                class="bg-bluesh text-white font-semibold py-2 px-5 rounded hover:opacity-80"
                >Create User</Link
            >
        </div>
        <div class="bg-white rounded shadow overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-left font-bold">
                        <th class="py-3 px-6">Name</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Id</th>
                        <th class="py-3 px-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="user in users.data"
                        :key="user.id"
                        class="hover:bg-gray-100 focus-within:bg-gray-100 duration-300"
                    >
                        <td class="border-t">
                            <Link
                                class="flex items-center px-6 py-4 focus:text-indigo-500"
                                :href="`/users/${user.id}/edit`"
                            >
                                {{ user.name }}
                            </Link>
                        </td>
                        <td class="border-t">
                            <Link
                                class="flex items-center px-6 py-4"
                                :href="`/users/${user.id}/edit`"
                            >
                                {{ user.email }}
                            </Link>
                        </td>
                        <td class="border-t">
                            <Link
                                class="flex items-center px-6 py-4"
                                :href="`/users/${user.id}/edit`"
                            >
                                {{ user.id }}
                            </Link>
                        </td>
                        <td class="border-t">
                            <Button
                                @click="destroy(user.id)"
                                class="bg-redsh hover:opacity-70 rounded-none py-1"
                            >
                                Delete
                            </Button>
                        </td>
                    </tr>
                    <tr v-if="users.data.length === 0">
                        <td class="px-6 py-4 border-t" colspan="4">
                            No users found.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <pagination class="mt-6" :links="users.links" />
    </AdminLayout>
</template>
