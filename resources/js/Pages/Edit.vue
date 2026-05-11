<template>
    <Head title="Edit Post" />
    <div class="row">
        <div class="col-12 mt-5 mb-5 text-center">
            <h1>Laravel Vue.js CRUD</h1>
            <br>
            <Link href="/" class="btn btn-primary btn-lg">Home</Link>
        </div>
            
    </div>
    <div class="flex flex-col items-center">
        <div id="frame" class="post__create">
            <form @submit.prevent="form.put(`/post/update/${post.id}`)">
                <div class="flex">
                    <div class="inner" style="">
                        <label><h5>Title</h5></label>
                        <br>
                        <input type="text" v-model="form.title"/>
                    </div>
                    <div class="inner">
                        <label><h5>Author</h5></label>
                        <br>
                        <input type="text" v-model="form.author"/>
                    </div>
                </div>
                <div class="inner">
                    <label><h5>Content</h5></label>
                    <br>
                    <textarea type="text" v-model="form.content"></textarea>
                </div>
                <div class="flex flex-col items-center">
                    <input class="btn btn-success btn-lg" type="submit" value="Update post">
                </div>
            </form>
        </div>
    </div>
    <!--<div class="post__create">
        <form @submit.prevent="form.put(`/post/update/${post.id}`)">
            <div>
                <label>Title</label>
                <input type="text" v-model="form.title" />
            </div>
            <div>
                <label>Author</label>
                <input type="text" v-model="form.author" />
            </div>
            <div>
                <label>Content</label>
                <textarea type="text" v-model="form.content"></textarea>
            </div>
            <div>
                <input type="submit" value="Update post">
            </div>
        </form>
    </div>-->
</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3';
    import { useForm } from '@inertiajs/vue3';
    import { defineProps } from 'vue';

    let props = defineProps({
        post: Object
    });

    const form = useForm({
        title: props.post.title,
        author: props.post.author,
        content: props.post.content,
    });
</script>