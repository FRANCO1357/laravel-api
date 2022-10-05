<template>
<div>
    <div class="card mb-2">
    <div class="card-body">
        <h5 class="card-title">{{post.title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Data di pubblicazione: {{publishedAt}}</h6>
        <p class="card-text">{{post.content}}</p>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <span class="badge badge-pill" :class="`badge-${post.category ? post.category.color : 'light'}`">{{post.category.label}}</span>
        <router-link :to="{name: 'post-detail', params:{id: post.id}}" class="btn btn-primary btn-sm">Vedi</router-link>
    </div>
</div>
</div>
</template>

<script>
export default{
    name: 'PostCard',
    props: {
        post: Object,
    },
    computed: {
        publishedAt(){
            const postDate = new Date(this.post.created_at);
            let day = postDate.getDate();
            let month = postDate.getMonth() + 1;
            let year = postDate.getFullYear();

            if(day < 10) day = '0' + day; 
            if(month < 10) month = '0' + month; 

            return `${day}/${month}/${year}`;
        }
    }
}
</script>

<style scoped lang="scss">

</style>