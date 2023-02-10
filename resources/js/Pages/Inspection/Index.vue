<template>
<div v-for="inspection in inspections" :key="inspection.id">
    {{ inspection.serviceOrder }}
</div>
</template>

<script setup>
defineProps({
    inspections: Array,
})

</script>
