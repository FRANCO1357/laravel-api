<template>
    <div class="loader-overlay">
        <div class="spinner-border text-primary" role="status">
        </div>
    </div>
</template>

<script>
    export default{
        name: 'AppLoader'
    }
</script> 

<style scoped lang="scss">
    .loader-overlay{
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        position: fixed;
        background-color: rgba($color: #000000, $alpha: 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 5;

        .spinner-border{
            width: 100px;
            height: 100px;
        }
    }
</style>