import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';
import AllTasks from '../views/AllTasks.vue';
import AddTask from '../views/AddTask.vue';
import Agenda from '../views/Agenda.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  }, {
    path: '/tasks',
    name: 'ViewTasks',
    component: AllTasks
  }, {
    path: '/tasks/add',
    name: 'AddTask',
    component: AddTask
  }, {
    path: '/agenda',
    name: 'Agenda',
    component: Agenda
  }, {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = new VueRouter({
    scrollBehavior(to, from, savedPosition) {
        const position = {x: 0, y: 0};

        if(savedPosition) {
            position.x = savedPosition.x;
            position.y = savedPosition.y;
        } else {
            return new Promise(resolve => {
                this.app.$root.$once('scrollBeforeEnter', () => {
                    resolve(position);
                });
            });
        }
    },
    routes
});

export default router
