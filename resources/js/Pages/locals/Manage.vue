<script setup>
import { ref, computed } from "vue";
import { router, Link, Head } from "@inertiajs/vue3";
import AdminLayout from "../layout/AdminLayout/AdminLayout.vue";
import Pagination from "../components/Pagination.vue";
import Button from "../components/Button.vue";
import Flash from "../components/Flash.vue";
import { usePage } from "@inertiajs/vue3";
const user = computed(() => usePage().props.auth.user);
const props = defineProps({ localsaccepted: Object, localspending: Object });
function destroy(id) {
    if (confirm("Are you sure you want to delete this local?")) {
        router.delete(`/localNGOs/${id}`);
    }
}
const locals = ref(false);
function togglelocals() {
    locals.value = !locals.value;
}

function toggleAccept(id) {
    router.post(`/localNGOs/manage/${id}`);
}
</script>
<script>
export default {
    layout: AdminLayout,
};
</script>
<template>
    <Head title="Manage" />
    <div class="flex justify-between items-center my-5 px-5">
        <p class="text-3xl text-slate-700 text-center font-bold">LocalNGOs</p>
        <button
            @click="togglelocals"
            v-if="user.role_id == 2"
            class="bg-bluesh text-white capitalize font-semibold py-2 px-5 rounded hover:opacity-80"
        >
            <span v-if="locals">see accepted</span>
            <span v-else>see pending</span>
        </button>
        <Link
            href="/localNGOs/create"
            class="bg-bluesh text-white font-semibold py-2 px-5 rounded hover:opacity-80"
            >Create LocalNGO
        </Link>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="w-full whitespace-nowrap">
            <thead>
                <tr class="text-left font-bold">
                    <th class="py-3 px-6">Name</th>
                    <th class="py-3 px-6">City</th>
                    <th class="py-3 px-6">Status</th>
                    <th class="py-3 px-6">Id</th>
                    <th class="py-3 px-5">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-if="locals"
                    v-for="local in localspending.data"
                    :key="local.id"
                    class="hover:bg-gray-100 focus-within:bg-gray-100 duration-300"
                >
                    <td class="border-t">
                        <Link
                            class="flex items-center px-6 py-4 focus:text-indigo-500"
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.name }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Link
                            class="flex items-center px-6 py-4"
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.location }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Link
                            class="flex items-center capitalize px-6 py-4"
                            :class="
                                local.status === 'pending'
                                    ? 'text-redsh'
                                    : 'text-green-600'
                            "
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.status }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Link
                            class="flex items-center px-6 py-4"
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.id }}
                        </Link>
                    </td>
                    <td class="border-t space-x-1">
                        <Button
                            @click="destroy(local.id)"
                            class="bg-redsh hover:opacity-70 rounded-none py-1"
                        >
                            Delete
                        </Button>
                        <Button
                            @click="toggleAccept(local.id)"
                            class="bg-green-600 hover:opacity-70 capitalize rounded-none py-1"
                        >
                            accept
                        </Button>
                    </td>
                </tr>

                <tr
                    v-else
                    v-for="(local, index) in localsaccepted.data"
                    :key="index"
                    class="hover:bg-gray-100 focus-within:bg-gray-100 duration-300"
                >
                    <td class="border-t">
                        <Link
                            class="flex items-center px-6 py-4 focus:text-indigo-500"
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.name }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Link
                            class="flex items-center px-6 py-4"
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.location }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Link
                            class="flex items-center capitalize px-6 py-4"
                            :class="
                                local.status === 'pending'
                                    ? 'text-redsh'
                                    : 'text-green-600'
                            "
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.status }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Link
                            class="flex items-center px-6 py-4"
                            :href="`/localNGOs/${local.id}/edit`"
                        >
                            {{ local.id }}
                        </Link>
                    </td>
                    <td class="border-t">
                        <Button
                            @click="destroy(local.id)"
                            class="bg-redsh hover:opacity-70 rounded-none py-1"
                        >
                            Delete
                        </Button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <Flash class="my-5" />
    <pagination class="mt-6" :links="localsaccepted.links" />
</template>
