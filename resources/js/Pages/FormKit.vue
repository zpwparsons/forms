<script setup>
import { Head } from '@inertiajs/vue3';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';

defineProps({
    schema: Array,
})

const handleSubmit = () => {
    console.log('handling submit...')
};
</script>

<template>
    <Head title="FormKit" />

    <DefaultLayout>
        <h1 class="mb-4 text-2xl font-bold">FormKit</h1>

        <FormKitSchema :schema="schema" />
    </DefaultLayout>
</template>

<style scoped>

</style>
