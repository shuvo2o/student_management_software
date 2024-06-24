<script setup>
import { Head ,Link  } from '@inertiajs/vue3'


defineProps({
  student_class: {
    type: Object,
    required: true,
  }
});
</script>

<template>

  <Head title="Class" />
  <h2 class="text-xl text-blue-700 leading-tight text-center">Student Class Page</h2>


  <div class="w-full pb-5">
    <Link :href="route('create.class')"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
      Add Class
    </Link>
  </div>


  <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blue-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Class Name</th>
            <th scope="col" class="px-6 py-3">Edit</th>
            <th scope="col" class="px-6 py-3">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="data in student_class" :key="data.id" class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ data.id }}</th>
            <td class="px-6 py-4">{{ data.class_name }}</td>
            <td class="px-6 py-4">
              <Link :href="route('class.edit', data.id)" method="" as="button" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>
             </td>
            <td class="px-6 py-4">
              <Link :href="route('class.delete', data.id)" method="delete" as="button" type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</Link>
             </td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>
</template>


<style>

</style>