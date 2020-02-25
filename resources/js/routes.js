import Front from './components/public/Front';
import Login from './components/layouts/Login';
import Register from './components/layouts/Register';
export const routes = [
    // public route
    {
        path : '/',
        component : Front,
        name : 'Home',
    },

    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    /*{
        path: '/products/:id',
        name: 'single-products',
        component: SingleProduct
    },
    {
        path: '/confirmation',
        name: 'confirmation',
        component: Confirmation
    },
    {
        path: '/checkout',
        name: 'checkout',
        component: Checkout,
        props: (route) => ({ pid: route.query.pid })
    },
    {
        path: '/dashboard',
        name: 'userboard',
        component: UserBoard,
        meta: {
            requiresAuth: true,
            is_user: true
        }
    },
    {
        path: '/admin/:page',
        name: 'admin-pages',
        component: Admin,
        meta: {
            requiresAuth: true,
            is_admin: true
        }
    },
    {
        path: '/admin',
        name: 'admin',
        component: Admin,
        meta: {
            requiresAuth: true,
            is_admin: true
        }
    },*/
]