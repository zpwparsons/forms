<script setup>
import { Head } from '@inertiajs/vue3';
import DefaultLayout from "@/Layouts/DefaultLayout.vue";

defineProps({
    schema: Array,
    tabs: Array,
});

const handleSubmit = () => {
    console.log('handling submit...')
};
</script>

<template>
    <Head title="VueForm" />

    <DefaultLayout>
        <h1 class="mb-4 text-2xl font-bold">VueForm</h1>

        <Vueform :schema="schema" :tabs="tabs" />
    </DefaultLayout>
</template>
