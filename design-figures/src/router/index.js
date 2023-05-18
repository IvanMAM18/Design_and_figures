import { createWebHistory, createRouter } from "vue-router";
import Index from '../View/Index.vue'
import Login from '../View/Login.vue'
import NewAccount from '../View/NewAccount.vue'
import ActivityPage from '../View/ActivityPage.vue'

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
        name: 'index',
        component: NewAccount
    },
    {
        path: '/ActivityPage',
        name: 'activityPage',
        component: ActivityPage
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;