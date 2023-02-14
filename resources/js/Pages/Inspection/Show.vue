<template>
  <div>
    <InspectionItem :inspection="inspection" />
  </div>
</template>

<script setup>
import InspectionItem from '@/Components/InspectionItem.vue';
defineProps({
  inspection: Object,
})
</script>