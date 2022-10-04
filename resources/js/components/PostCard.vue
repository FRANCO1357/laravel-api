<template>
<div>
    <div class="card mb-2">
    <div class="card-body">
        <h5 class="card-title">{{post.title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{post.created_at}}</h6>
        <p class="card-text">{{post.content}}</p>
    </div>
</div>
</div>
</template>

<script>
export default{
    name: 'PostCard',
    props: {
        post: Object,
    }
}
</script>

<style scoped lang="scss">

</style>