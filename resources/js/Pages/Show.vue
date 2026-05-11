<template>
    <Head title="Show Post" />
    <div class="row">
        <div class="col-12 mt-5 mb-5 text-center">
            <h1>Laravel Vue.js CRUD</h1>
            <br>
            <Link href="/" class="btn btn-primary btn-lg">Home</Link>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div id="frame">
            <div class="inner">
                <h3>Title:</h3>
                <p class="showP">{{ post.title }}</p  >
            </div>
            <div class="inner">
                <h3>Author:</h3>
                <p class="showP">{{ post.author }}</p  >
            </div>
            <div class="inner">
                <h3>Content:</h3>
                <p class="showP" style="width: 750px; text-align: justify;">{{ post.content }}</p  >
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    post: Object
})

</script>