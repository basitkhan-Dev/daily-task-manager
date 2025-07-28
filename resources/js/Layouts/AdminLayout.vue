<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
      <div class="p-4 text-xl font-bold border-b">🧭 Admin Panel</div>
      <nav class="flex flex-col p-4 space-y-2">
        <Link href="/admin/dashboard" class="hover:text-blue-600">Dashboard</Link>
        <Link href="/tasks" class="hover:text-blue-600">Task Manager</Link>
        <Link href="#" class="hover:text-blue-600">Users</Link>
        <Link href="#" class="hover:text-blue-600">Settings</Link>
        <Link href="#" class="hover:text-red-600">Logout</Link>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1">
      <!-- Header -->
      <header class="bg-white shadow p-4 text-lg font-semibold border-b">
        📋 Daily Task Manager
      </header>

      <!-- Page Content -->
      <main class="p-6">
        <slot />
      </main>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
