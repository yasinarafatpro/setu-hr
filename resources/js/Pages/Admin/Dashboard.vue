<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import Nav from '@/Pages/Shared/Nav.vue';
import Header from '@/Pages/Shared/Header.vue'

const props = defineProps({
    employee: {
        type: Object,
    },
})
let search = ref('');
// watch(search, value => {
//     Inertia.get('/admin/dashboard', { search: value }, {
//         replace: true
//     });
// });
</script>

<template>
    <Head title="Super Admin Dashboard" />
    <AdminAuthenticatedLayout>
        <div>
            <Header/>
            <Nav></Nav>            
            <main class="ml-60 p-2">
               <div class="flex flex-col px-12 bg-slate-400 ml-4">
                    <p>Super Admin</p>
               </div>
                <!-- <div class="flex flex-col px-12 bg-slate-400 ml-4">
                    <table class="w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">Employee id</th>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Designation</th>
                                <th scope="col" class="px-6 py-4">Branch</th>
                                <th scope="col" class="px-6 py-4">Monthly Deposit</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-neutral-500" v-for="employee in employee.data"
                                :key="employee.id">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ employee.emp_id }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ employee.name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ employee.designation }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ employee.branch_name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ employee.amount_of_deposit }}</td>
                                <td class="whitespace-nowrap px-6 py-4"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="m-6">
                        <Component :is="Link" v-for="link in employee.links" :href="link.url" v-html="link.label"
                            class="px-1" :class="link.url ? '' : 'text-red-500'" />
                    </div>
                </div> -->
            </main>
        </div>
        <!-- <template #header>
            <div class="flex justify-between mb-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
                <input v-model="search" type="text" class="border px-2 rounded-lg" placeholder="search.." />
            </div>
            <aside id="sidebar-multi-level-sidebar"
                class="fixed top-1 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 mt-16">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul>
                        <li>Side ber</li>
                    </ul>
                </div>
            </aside>
        </template>
        <div id="main">
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
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-6">
                <Component :is="Link" v-for="link in employee.links" :href="link.url" v-html="link.label" class="px-1"
                    :class="link.url ? '' : 'text-red-500'" />
            </div>
        </div> -->
</AdminAuthenticatedLayout></template>
