<template>
    <header class="w-full bg-slate-300 flex justify-between items-end">
        <div>
            
        </div>
        <div class="p-2 border">
            <input type="search" class="rounded-md border" placeholder="Search.." />
        </div>
    </header>
</template>
<script setup>
 const props = defineProps({
    time:String
 })
</script>