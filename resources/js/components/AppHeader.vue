<template>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{title}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li v-for="link in links" class="nav-item">
                <router-link class="nav-link" :to="{name: link.name}">{{link.label}}</router-link>
            </li>
        </ul>
    </div>
    </nav>
</header>
</template>

<script>
export default{
    name: 'AppHeader',
    data: () => ({
        links: [
            {name: 'home', label: 'Home'},
            {name: 'about', label: 'About'},
            {name: 'contacts', label: 'Contacts'},
        ]
    }),
    props:{
        title: String,
    }
}
</script>

<style scoped lang="scss">

</style>