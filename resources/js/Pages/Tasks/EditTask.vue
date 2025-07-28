<script setup>
import { useForm } from '@inertiajs/vue3'
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { Head } from '@inertiajs/vue3'
import { computed } from 'vue'

const props = defineProps({
  task: Object
})

const form = useForm({
  title: props.task.title,
  description: props.task.description,
  due_date: props.task.due_date,
})

const submit = () => {
  form.put(route('tasks.update', props.task.id))
}
</script>

<template>
  <AdminLayout>
    <Head title="Edit Task" />
    <h2 class="text-2xl font-bold mb-4">Edit Task</h2>
    <form @submit.prevent="submit" class="space-y-4 max-w-xl">
      <div>
        <label class="block text-sm font-medium">Title</label>
        <input type="text" v-model="form.title" class="w-full border rounded px-3 py-2" />
        <div v-if="form.errors.title" class="text-red-500 text-sm">{{ form.errors.title }}</div>
      </div>

      <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea v-model="form.description" class="w-full border rounded px-3 py-2"></textarea>
        <div v-if="form.errors.description" class="text-red-500 text-sm">{{ form.errors.description }}</div>
      </div>

      <div>
        <label class="block text-sm font-medium">Due Date</label>
        <input type="date" v-model="form.due_date" class="w-full border rounded px-3 py-2" />
        <div v-if="form.errors.due_date" class="text-red-500 text-sm">{{ form.errors.due_date }}</div>
      </div>

      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
        Update Task
      </button>
    </form>
  </AdminLayout>
</template>
