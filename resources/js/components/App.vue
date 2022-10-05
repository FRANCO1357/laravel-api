<template>
    <div class="content">
        <AppHeader :title="title"/>
        <main class="container mt-3">
            <PostList/>
        </main>
    </div>
</template>

<script>
import AppHeader from "./AppHeader"
import PostList from "./posts/PostList.vue";

export default{
    name: "App",
    components: {
    AppHeader,
    PostList
},
    data(){
        return{
            title: "Boolpress",
        };
    },
};
</script>

<style scoped lang="scss"></style>