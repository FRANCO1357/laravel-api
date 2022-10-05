<template>
    <div id="post-detail-page">
        <PostCard :post="post"/>
        <AppLoader v-if="isLoading"/>
    </div>
    </template>
    
<script>
import PostCard from '../posts/PostCard.vue';
import AppLoader from '../AppLoader.vue';
    export default{
    name: "PostDetailPage",
    data() {
        return {
            post: null,
            isLoading: false,
        };
    },
    methods: {
        fetchPost() {
            this.isLoading = true;
            axios.get("http://localhost:8000/api/posts/" + this.$route.params.id).then((res) => {
                this.post = res.data;
            }).catch(err => {
                console.log(err);
            }).then(() => {
                this.isLoading = false;
            });
        }
    },
    mounted() {
        this.fetchPost();
    },
    components: { PostCard, AppLoader }
}
</script>
    
<style scoped lang="scss">
    
</style>