<template>
  <Head title="Main Page" />

<div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5 text-center">
                <h1>Laravel Vue.js CRUD</h1>
                <br>
                <Link href="/post/create" class="btn btn-primary btn-lg">Create Post</Link>
            </div>

            <div class="col-12 mt-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="text-center">Title</th>
                        <th scope="col" class="text-center">Author</th>
                        <th scope="col" class="text-center">Read</th>
                        <th scope="col" class="text-center">Update</th>
                        <th scope="col" class="text-center">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="post__block" v-for="post in this.posts" :key="post.id">
                        <th scope="row">{{ post.id }}</th>
                        <td>{{ post.title }}</td>
                        <td class="text-center">{{ post.author }}</td>
                        <td class="text-center"><Link :href="`/post/${post.id}`" class="btn btn-primary">Read more</Link></td>
                        <td class="text-center"><Link :href="`/post/edit/${post.id}`" class=" btn btn-success">Edit</Link></td>
                        <td class="text-center"><Link :href="`/post/delete/${post.id}`" method="DELETE" class=" btn btn-danger">Delete</Link></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

    <div class="container mx-auto pt-5">
        <!--
        <nav>
            <Link href="/post/create">Create Post</Link>
        </nav>

        <div class="post__block" v-for="post in posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <p>{{ post.author }}</p>
            <Link :href="`/post/${post.id}`">Read more</Link> | 
            <Link :href="`/post/edit/${post.id}`">Edit post</Link> |
            <Link :href="`/post/delete/${post.id}`" method="DELETE">Delete post</Link>
        </div>-->
        
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    posts: Array
});

</script>