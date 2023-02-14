<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('inspection.index')">Inspeções</Link>
        </div>
        <div class="text-xl text-gray-600 dark:text-gray-400 font-bold text-center">
          <Link :href="route('inspection.index')">Conformity</Link>
        </div>
        <div>
          <Link :href="route('inspection.create')" class="btn-primary">+ Criar</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>
  </template>
   
  <script setup>
  import { computed } from 'vue'
  import { Link, usePage } from '@inertiajs/vue3'
   
  const flashSuccess = computed(
  () => usePage().props.flash.success,
)

  </script>