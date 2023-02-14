<template>
    <Link href="/inspection">Inspeções</Link>&nbsp;
    <Link href="/inspection/create">Registrar Inspeção</Link>
   
    <div v-if="flashSuccess" class="success">
      {{ flashSuccess }}
    </div>
   
    <slot>Default</slot>
  </template>
   
  <script setup>
  import { computed } from 'vue'
  import { Link, usePage } from '@inertiajs/vue3'
   
  const flashSuccess = computed(
  () => usePage().props.flash.success,
)

  </script>
   
    <style scoped>
      .success {
        background-color: green;
        color: white;
      }
    </style>