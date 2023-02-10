<template>
<div v-for="inspection in inspections" :key="inspection.id">
    <Link :href="`/inspection/${inspection.id}`">
    <InspectionItem :inspection="inspection" />
</Link>
</div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import InspectionItem from '@/Components/InspectionItem.vue'
defineProps({
    inspections: Array,
})

</script>
