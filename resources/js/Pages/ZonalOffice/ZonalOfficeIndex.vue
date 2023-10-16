<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import Nav from '@/Pages/Shared/Nav.vue';
import Header from '@/Pages/Shared/Header.vue'

const props = defineProps({
    zonalOffice: {
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
    <Head title="Head Office" />
    <AdminAuthenticatedLayout>
        <div>
            <Header/>
            <Nav></Nav>            
            <main class="ml-60 p-2">
                <div class="flex flex-col px-12 bg-slate-400 ml-4">
                    <table class="w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Address</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-neutral-500" v-for="zonalOffice in zonalOffice.data"
                                :key="zonalOffice.id">
                                <td class="whitespace-nowrap px-6 py-4">{{ zonalOffice.name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ zonalOffice.address }}</td>
                                <td class="whitespace-nowrap px-6 py-4"><Link href="#">Add</Link> | <Link href="#">Edit</Link> | <Link href="#">Delete</Link></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="m-6">
                        <Component :is="Link" v-for="link in zonalOffice.links" :href="link.url" v-html="link.label"
                            class="px-1" :class="link.url ? '' : 'text-red-500'" />
                    </div>
                </div>
            </main>
        </div>
</AdminAuthenticatedLayout></template>

