<template>
  <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
    <h2 class="text-2xl font-semibold mb-6">📝 Create New Task</h2>

    <form @submit.prevent="submit">
      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Title</label>
        <input v-model="form.title" type="text" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Description</label>
        <textarea v-model="form.description" rows="4" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Due Date</label>
        <input v-model="form.due_date" type="date" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        ➕ Save Task
      </button>
    </form>
  </div>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { useForm } from '@inertiajs/vue3'
defineOptions({ layout: AdminLayout })
const form = useForm({
  title: '',
  description: '',
  due_date: '',
})

const submit = () => {
  form.post(route('tasks.store'))
}
</script>
