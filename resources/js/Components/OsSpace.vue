<template>
    Ordem de Serviço nº: <span class="text-gray-500">  </span><span class="" ></span>
    <span class="font-bold text-gray-200"> {{ inspection.serviceOrder }}</span> <br>
    Container: <span class="text-gray-500">  </span><span class="" ></span>
    <span class="font-bold text-gray-200"> {{ inspection.container }}</span> <br>
  </template>


<script setup>
defineProps({
    inspection: Object,
})

</script>
