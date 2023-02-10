<template>
    <Link href="/">Main Page</Link>
    <Link href="/hello">Show Page</Link>
    <slot></slot>
</template>

<script setup>
    import{Link} from '@inertiajs/vue3'
</script>
