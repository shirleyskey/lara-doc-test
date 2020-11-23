<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3" v-for="(book,index) in books" :key="index">
                <book-item :id="book.id" :title="book.title" :content="book.description"></book-item>
            </div>
        </div>
    </div>
</template>

<script>
import BookItem from './BookItem'
    export default {
        components: {
            BookItem
        },
        created(){
            axios.get('/api/booklist')
                .then(response =>{this.books = response.data.data})
        },

        data(){
            return {
                books: [],

            }
        }

    }
</script>

<style lang="scss" scoped>

</style>