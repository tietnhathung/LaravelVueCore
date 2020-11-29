import Users from '../components/users/index.vue';

const route = [
    {
        path: '/users',
        component: Users,
        // children: [
        //     {
        //         path: 'profile',
        //         component: UserProfile
        //     },
        //     {
        //         path: 'posts',
        //         component: UserPosts
        //     }
        // ]
    }
];

export default route;
