<template>
    <section id="post-list">
        <h3>Lista dei posts</h3>
        <div v-if="posts.length">
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
        </div>
        <h5 v-else>Nessun post</h5>
    </section>
</template>

<script>
import PostCard from './PostCard.vue';
    export default{
    name: "PostList",
    components: {
        PostCard
    },
    data() {
        return {
            posts: [],
        };
    },
    methods: {
        fetchPosts() {
            axios.get("http://localhost:8000/api/posts").then(res => {
                this.posts = res.data;
            }).catch((err) => {
                console.error(err);
            }).then(() => {
                console.log("Chiamata terminata");
            });
        }
    },
    mounted() {
        this.fetchPosts();
    },
    components: { PostCard }
}
</script>

<style scoped lang="scss">

</style>