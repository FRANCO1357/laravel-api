<template>
    <section id="post-list">
        <h3>Lista dei posts</h3>
        <AppLoader v-if="isLoading" />
        <div class="text-danger" v-else-if="error">{{error}}</div>
        <div v-else>
            <div v-if="posts.length">
                <PostCard v-for="post in posts" :key="post.id" :post="post" />
            </div>
            <h5 v-else>Nessun post</h5>
        </div>
    </section>
</template>

<script>
import PostCard from './PostCard.vue';
import AppLoader from '../AppLoader.vue';
    export default{
    name: "PostList",
    components: {
        PostCard
    },
    data() {
        return {
            posts: [],
            isLoading: false,
            error: null,
        };
    },
    methods: {
        fetchPosts() {
            this.isLoading = true;
            axios.get("http://localhost:8000/api/posts").then(res => {
                this.posts = res.data;
            }).catch((err) => {
                this.error = 'Errore durante il fetch dei post';
            }).then(() => {
                this.isLoading = false;
            });
        }
    },
    mounted() {
        this.fetchPosts();
    },
    components: { PostCard, AppLoader }
}
</script>

<style scoped lang="scss">

</style>