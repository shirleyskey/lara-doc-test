<template>
    <div>
            <h2>Review List</h2>
        <div v-for="(review, index) in reviews" :key="review.id + index" class="border-bottom pt-4">
            <div class="row">
                <div class="col-md-6">
                    <h4>Shirley Skey</h4>
                </div>
                <div class="col-md-6">
                    <h5 class="text-center text-secondary">{{review.rating}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="text-bold">{{review.created_at}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>{{review.content}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            bookableId: String,
        },
        data(){
            return {
                loading: false,
                reviews: null
            }
        },
        created(){
            this.loading = true,
            axios.get(`/api/booklist/${this.bookableId}/reviews`)
                .then( response => this.reviews = response.data.data)
                .then(() => (this.loading = false));
        }
    }
</script>

<style lang="scss" scoped>

</style>