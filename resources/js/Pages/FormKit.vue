<script setup>
import { Head } from '@inertiajs/vue3';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import { FormKitSchema } from '@formkit/vue'

defineProps({
    schema: Array,
})

const handleSubmit = (e) => {
    e.preventDefault();
    console.log(e)
    console.log('handling submit...')
};
</script>

<template>
    <Head title="FormKit" />

    <DefaultLayout>
        <h1 class="mb-4 text-2xl font-bold">FormKit</h1>

        <FormKit type="form" :actions="false">
            <FormKitSchema :schema="schema" />
        </FormKit>
    </DefaultLayout>
</template>
