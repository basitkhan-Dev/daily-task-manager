<template>
  <div class="p-6 space-y-6">
    <h1 class="text-2xl font-semibold text-gray-800">Task Manager</h1>

    <!-- Task Creation Form -->
    <form @submit.prevent="submit" class="space-y-4 bg-white shadow-md rounded-lg p-4">
      <input v-model="form.title" type="text" placeholder="Task Title" class="input" />
      <textarea v-model="form.description" placeholder="Description" class="input"></textarea>
      <button type="submit" class="btn">Add Task</button>
    </form>

    <!-- Task List -->
    <div class="grid md:grid-cols-2 gap-4">
      <div v-for="task in tasks" :key="task.id" class="p-4 bg-gray-100 rounded-md shadow-sm">
        <h2 class="text-xl font-medium">{{ task.title }}</h2>
        <p class="text-gray-600">{{ task.description }}</p>
        <div class="mt-2 space-x-2">
          <button @click="editTask(task)" class="text-blue-600">Edit</button>
          <button @click="deleteTask(task.id)" class="text-red-600">Delete</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useForm, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import { toast } from 'vue3-toastify'; // Optional if you want notifications

const props = defineProps({
  tasks: Array
});

const form = useForm({
  title: '',
  description: '',
  id: null,
});

const submit = () => {
  if (form.id) {
    form.put(`/tasks/${form.id}`, {
      onSuccess: () => {
        toast.success('Task updated!');
        form.reset();
      }
    });
  } else {
    form.post('/tasks', {
      onSuccess: () => {
        toast.success('Task created!');
        form.reset();
      }
    });
  }
};

const deleteTask = (id) => {
  if (confirm('Are you sure?')) {
    router.delete(`/tasks/${id}`, {
      onSuccess: () => toast.success('Task deleted!')
    });
  }
};

const editTask = (task) => {
  form.id = task.id;
  form.title = task.title;
  form.description = task.description;
};
</script>

<style scoped>
.input {
  @apply w-full border border-gray-300 p-2 rounded;
}
.btn {
  @apply bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700;
}
</style>
