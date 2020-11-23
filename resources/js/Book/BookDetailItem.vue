<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 mb-4">
                <h1>{{bookDetailItem.title}}</h1>
                <p>{{bookDetailItem.description}}</p>
                <review-list :bookable-id="this.$route.params.id"></review-list>
            </div>
            <div class="col-4">
                <avaiability"></avaiability>
            </div>
            
        </div>
    </div>
</template>

<script>
import Avaiability from './Avaiability.vue';
import ReviewList from './ReviewList.vue';
    export default {
        components: {
            Avaiability,
            ReviewList
        },
        data(){
            return {
                bookDetailItem: null
            }
        },
        created(){
            axios.get(`/api/booklist/${this.$route.params.id}`)
                .then((response) => this.bookDetailItem = response.data.data);
        },

    }
</script>

<style lang="scss" scoped>

</style>