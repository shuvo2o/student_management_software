<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';


const form = useForm({
    class_name: '',
});

defineProps({
    errors: Object,
});

const submit = () => {
    form.post(route('class.store'));
};
</script>

<template>

    <Head title="skill-create"/>
    <h2 class="text-xl text-blue-700 leading-tight text-center">
        Class Create Page
    </h2>
    <div class="w-full pb-5">
        <Link :href="route('student.class')" type="button" class="text-white bg-cyan-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Student Class Page
        </Link>
    </div>
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="relative overflow-x-auto">
            <form @submit.prevent="submit" class="max-w-lg mx-auto">
                <div class="mb-5">
                    <label for="class_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name</label>
                    <input v-model="form.class_name" type="text" id="class_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write Class Name"/>
                    <div class="text-red-400 text-sm" v-if="errors && errors.name">{{ errors.class_name }}</div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </form>
        </div>
    </div>
</template>

<style>
</style>
