<template>
    <div>
        <spin v-if="loading"></spin>
        <div class="uk-child-width-1-2@m" uk-grid v-else>
            <post
                v-for="post in posts.data"
                :id="post.id"
                :title="post.title"
                :body="post.body"
                :date="post.created_at"
            />
        </div>
        <div class="pagination justify-content-center">
            <pagination :data="posts" @pagination-change-page="loadPosts" class="my-5">
                <span slot="prev-nav">&lt;</span>
                <span slot="next-nav">&gt;</span>
            </pagination>
        </div>
    </div>
</template>

<script>
    import spin from "../components/spin";
    import axios from 'axios';
    import post from "../components/Blog/Post";

    export default {
        components: {
            spin,
            post
        },
        data() {
            return {
                posts: {},
                loading: true,
            }
        },
        mounted() {
            this.loadPosts();
        },
        methods: {
            loadPosts(page = 1) {
                axios
                    .get('/api/posts?page=' + page)
                    .then(response => {
                        this.posts = response.data;
                        this.loading = false;
                    });
            }
        }
    }
</script>

<style scoped>
    .pagination ol, ul {
        padding-left: 40px;
        padding-right: 0;
    }
</style>
