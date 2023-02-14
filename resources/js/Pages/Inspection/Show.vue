<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <Box class="md:col-span-7 flex items-center w-full">
      <div class="w-full text-center font-medium text-gray-500">fotos do carregamento</div>
    </Box>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box>
        <template #header>
          Informações gerais:
        </template>
        <InspectionSpace :inspection="inspection" class="text-lg" />

      </Box>
      <Box>
        <template #header>
          Informações adicionais:
        </template>
        <InspectionItem :inspection="inspection" class="text-lg" />
       
      </Box>
    </div>
  </div>
</template>

<script setup>
import InspectionItem from '@/Components/InspectionItem.vue'
import InspectionSpace from '@/Components/InspectionSpace.vue'
import Box from '../../Components/UI/Box.vue'
defineProps({
  inspection: Object,
})
</script>