// import Main from './pages/main'
export default[
    // { path: '/', redirect: { name: 'login'} },
    { path: '/', component: require('./components/Index.vue'), name:'index' },
    // { path: '/login', component: require('./pages/Login.vue'), name:'login' },
    // { path: '', component: Main, children: [
    //     { path:'/list', component: require('./components/List.vue'),name:'list'},
    //     { path:'/add',  component: require('./components/Add.vue'),name:'add'},
    //  ] },
];