import { createWebHistory, createRouter } from "vue-router";
import Index from '../view/Index.vue'
import Login from '../view/Login.vue'
import NewAccount from '../view/NewAccount.vue'
import ActivityPage from '../view/ActivityPage.vue'
import LandingPage from '../view/LandingPage.vue'

const routes = [
    {
        path: '/Index',
        name: 'index',
        component: Index
    },
    {
        path: '/Login',
        name: 'login',
        component: Login
    },
    {
        path: '/NewAccount',
        name: 'newAccount',
        component: NewAccount
    },
    {
        path: '/ActivityPage',
        name: 'activityPage',
        component: ActivityPage
    },
    {
        path: '/LandingPage',
        name: 'landingPage',
        component: LandingPage
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;