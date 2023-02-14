<template>
      <div class="mb-5">
    <button class="btn-primary" @click="orderByServiceOrderNumber('asc')">Filtro</button>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

    <Box v-for="inspection in inspections" :key="inspection.id">
      <div class="mb-5">
        <Link :href="route('inspection.show', { inspection: inspection.id })">
          <InspectionSpace :inspection="inspection" class="text-lg" />
        </Link>
      </div>
      <div class="flex flex-d">
  <div class="btn-yellow mr-4">
    <Link :href="route('inspection.edit', { inspection: inspection.id })">Editar</Link>
  </div>
  <div class="btn-red">
    <Link :href="route('inspection.destroy', { inspection: inspection.id })" method="DELETE" as="button">Deletar</Link>
  </div>
</div>
    </Box>
  </div>

</template>

  
<script setup>
import { Link } from '@inertiajs/vue3'
import InspectionSpace from '@/Components/InspectionSpace.vue';
import Box from '@/Components/UI/Box.vue'
import OsSpace from '@/Components/OsSpace.vue';

defineProps({
  inspections: Array,
})

</script>
