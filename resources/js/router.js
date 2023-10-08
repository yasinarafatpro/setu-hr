import { createRouter, createWebHistory } from 'vue-router';
import EmployeeIndex from './Pages/Employee/EmployeeIndex.vue'
import WelcomeVue from './Pages/Welcome.vue';
import DashboardVue from './Pages/Admin/Dashboard.vue';

const routes = [
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