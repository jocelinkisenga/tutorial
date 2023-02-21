<script>

import { onMounted } from 'vue';
import AppLayout from './../../Layouts/AppLayout.vue';

    export default{
        components:{
            AppLayout
        },
        props:['courses'],

        data(){
            return {'ListCourses': this.courses}
        },

        mounted(){
             console.log(this.ListCourses)
  
        }
    }
</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                liste des cours
            </h2>
        </template>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


            <div v-for="course in ListCourses" v-bind:key="course.id">


                <div class="mt-8 bg-white bg-green-700 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                class="w-8 h-8 text-gray-500"
                            ><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                            <div class="ml-4 text-md leading-7 font-semibold">
                                <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">{{course.title}}</a><span class=" font-bold ml-4">({{ course.chapters_count }} chaps)</span>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </AppLayout>
</template>
