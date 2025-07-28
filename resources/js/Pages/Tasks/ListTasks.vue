<template>
  <AdminLayout title="All Tasks">
    <div class="p-6 bg-white shadow rounded">
      <h1 class="text-2xl font-bold mb-4">All Tasks</h1>

      <Link href="/tasks/create" class="mb-4 inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        + Create New Task
      </Link>

      <table class="min-w-full mt-4 border">
        <thead class="bg-gray-100">
          <tr>
            <th class="text-left p-2 border">#</th>
            <th class="text-left p-2 border">Title</th>
            <th class="text-left p-2 border">Due Date</th>
            <th class="text-left p-2 border">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(task, index) in tasks" :key="task.id">
            <td class="p-2 border">{{ index + 1 }}</td>
            <td class="p-2 border">{{ task.title }}</td>
            <td class="p-2 border">{{ task.due_date ?? '—' }}</td>
            <td class="p-2 border space-x-2">
              <Link :href="`/tasks/${task.id}/edit`" class="text-blue-600 hover:underline">Edit</Link>
              <button @click="deleteTask(task.id)" class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { router } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'

defineProps({
  tasks: Array
})

const deleteTask = (id) => {
  if (confirm('Are you sure you want to delete this task?')) {
    router.delete(`/tasks/${id}`)
  }
}
</script>
