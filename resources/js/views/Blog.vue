<template>
    <spin v-if="loading"></spin>
    <div class="uk-child-width-1-2@m" uk-grid v-else>
        <post
            v-for="post in posts"
            :id="post.id"
            :title="post.title"
            :body="post.body"
            :date="post.created_at"
        />
    </div>
</template>

<script>
    import Spin from "../components/Spin";
    import axios from 'axios';
    import Post from "../components/Blog/Post";

    export default {
        components: {
            Spin,
            Post
        },
        data: () => ({
            loading: true,
            posts: []
        }),
        mounted() {
            this.loadPosts();
        },
        methods: {
            loadPosts() {
                axios.get('/api/posts')
                    .then(res => {
                        this.posts = res.data;
                        setTimeout(() => {
                            this.loading = false;
                        }, 500)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
