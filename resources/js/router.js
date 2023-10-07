import { createRouter, createWebHistory } from 'vue-router';
import EmployeeIndex from './Pages/Employee/EmployeeIndex.vue'
import WelcomeVue from './Pages/Welcome.vue';

const routes = [
    {
        path: '/',
        component: WelcomeVue,
        name: 'welcome-index',
    },
    {
      path: '/employee',
      component: EmployeeIndex,
      name: 'employee-index',
    }
  ];
  
  const router = createRouter({
    history: createWebHistory(),
    routes,
  });

  export default router;