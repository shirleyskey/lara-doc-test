import VueRouter from 'vue-router';
import BookItemList from './Books/BookItemList.vue';
import BookDetailItem from './Book/BookDetailItem.vue';
const routes = [
    {
        path: '/',
        component: BookItemList,
        name: 'home'
    }, 
    {
        path: '/booklist/:id',
        component: BookDetailItem,
        name: 'detail'
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;


