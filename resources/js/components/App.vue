<template>
    <div class="content">
        <AppHeader :title="title"/>
        <main class="container mt-3">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import HomePage from "./pages/Homepage.vue"
import AppHeader from "./AppHeader"
import PostList from "./posts/PostList.vue";

export default{
    name: "App",
    components: {
    AppHeader,
    HomePage,
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