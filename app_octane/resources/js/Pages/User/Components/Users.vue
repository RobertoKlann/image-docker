<template>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
        <div v-for="user in users" :key="user.id" class="group relative">
            <div class="mt-4 flex justify-between">
                <div>
                    <h5 class="text-sm text-gray-700">
                        <span aria-hidden="true" class="" />
                        {{ user.name }}
                    </h5>
                    <p class="mt-1 text-sm text-gray-500">{{ user.email }}</p>
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>
import { Link, router } from '@inertiajs/vue3';

defineProps({
    users: Array
})

</script>