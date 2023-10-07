<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import Pagination from '@/Components/Pagination.vue'
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    employee: {
        type: Object,
    }
})
let search = ref('');
watch(search, value => {
    Inertia.get('/admin/dashboard', { search: value }, {
        replace : true
    });
});
</script>

<template>
    <Head title="Admin Dashboard" />
    <AdminAuthenticatedLayout>
        <template #header>
            <div class="flex justify-between mb-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
                <input v-model="search" type="text" class="border px-2 rounded-lg" placeholder="search.." />
            </div>
        </template>
        <div>
            <div class="flex flex-col px-12 bg-slate-400 m-6">
                <table class="w-full text-left text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">Employee id</th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Designation</th>
                            <th scope="col" class="px-6 py-4">Branch</th>
                            <th scope="col" class="px-6 py-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-neutral-500" v-for="employee in employee.data" :key="employee.id">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ employee.emp_id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ employee.name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ employee.designation }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ employee.branch_name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <!-- <Link>Edit</Link> -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-6">
                <!-- <Pagination :links="employee.links"/> -->
                <!-- <template v-for="link in employee.links">
                    <Link
                    v-if="link.url"
                    :href="link.url" 
                    v-html = "link.label"
                    />
                    <span v-else v-html="link.label"></span>
                </template> -->
                <Component :is="Link" v-for="link in employee.links" :href="link.url" v-html="link.label" class="px-1"
                    :class="link.url ? '' : 'text-red-500'" />
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>
