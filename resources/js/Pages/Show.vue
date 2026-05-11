<template>
    <div class="post__content">
        <h3>Title</h3>
        <h1>{{ post.title }}</h1>
        <p>Author</p>
        <p>{{ post.author }}</p>
        <p>Content</p>
        <div>
           {{ post.content }}
        </div>
    </div>
</template>

<script setup>
//import { defineComponent } from 'vue';

defineProps({
    post: Object
})

</script>