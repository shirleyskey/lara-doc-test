<template>
    <div>
            <h2>Review List</h2>
        <div v-for="number in 3" :key="number" class="border-bottom pt-4">
            <div class="row">
                <div class="col-md-6">
                    <h4>Shirley Skey</h4>
                </div>
                <div class="col-md-6">
                    <h5 class="text-center text-secondary">Start Rating</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="text-bold">Adding 5 minutes ago</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Content of the Review</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>