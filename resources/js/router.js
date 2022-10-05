import Vue from 'vue'
import VueRouter from 'vue-router'


import HomePage from "./components/pages/HomePage.vue"
import AboutPage from "./components/pages/AboutPage.vue"
import ContactsPage from "./components/pages/ContactsPage.vue"
import PostDetailPage from "./components/pages/PostDetailPage.vue"
import NotFoundPage from "./components/pages/NotFoundPage.vue"



Vue.use(VueRouter)


const routes = new VueRouter({
    linkExactActiveClass: 'active',
    mode: 'history',
    routes: [
        {path: '/', component: HomePage, name: 'home'},
        {path: '/about', component: AboutPage, name: 'about'},
        {path: '/contacts', component: ContactsPage, name: 'contacts'},
        {path: '/posts/:id', component: PostDetailPage, name: 'post-detail'},
        
        {path: '*', component: NotFoundPage},
    ]
});


export default routes;