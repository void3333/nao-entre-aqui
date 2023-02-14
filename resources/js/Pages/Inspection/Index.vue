<template>
    <div v-for="inspection in inspections" :key="inspection.id">
      <div>
      <Link :href="`/inspection/${inspection.id}`">
        <InspectionItem :inspection="inspection" />
      </Link>
    </div>
    <div>
      <Link :href="`/inspection/${inspection.id}/edit`">Edit</Link>
    </div>
    <div>
      <Link :href="`/inspection/${inspection.id}`" method="DELETE">Deletar</Link>
    </div>
    </div>
  </template>
  
  <script setup>
  import {Link} from '@inertiajs/vue3'
  import InspectionItem from '@/Components/InspectionItem.vue';
  defineProps({
    inspections: Array,
  })
  </script>
