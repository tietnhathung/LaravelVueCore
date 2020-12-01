import index from '../pages/users/index';
import create from '../pages/users/create';

const routes = [
    {
        path: '/users',
        component: index,
        name : 'users.list'
    },
    {
        path: '/users/create',
        component: create,
        name : 'users.create'
    }
];

export default routes;
