import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from './pages/Dashboard.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'route.root',
    redirect: '/dashboard'
  },
  {
    path: '/dashboard',
    name: 'route.dashboard',
    component: Dashboard
  },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router
