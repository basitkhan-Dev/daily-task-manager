<template>
  <div>
    <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
    <router-link :href="route('tasks.create')" class="btn btn-primary">+ Create Task</router-link>
  </div>
</template>

<script setup>
import { router } from '@inertiajs/vue3';
</script>
