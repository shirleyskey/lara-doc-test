<template>
    <div>
        <h3 class="text-uppercase font-weight-bolder mb-4">Check Avaiability</h3>
        <div class="form-row">
            <div class="form-group col-6">
                <label for="from">From</label>
                <input 
                    type="text" 
                    class="form-control-sm date" 
                    name="from" 
                    placeholder="Start Date"
                    v-model="from"
                    @keyup.enter="check"
                    >
            </div>
            <div class="form-group col-6">
                <label for="to">To</label>
                <input 
                    type="text" 
                    class="form-control-sm date" 
                    name="to" 
                    placeholder="End Date"
                    v-model="to"
                    @keyup.enter="check"
                    >
            </div>
            <button 
                class="btn btn-block btn-secondary"
                @click="check"
                >
                    Check 
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                from: null, 
                to: null
            }
        },
        methods: {
            check(){
                alert("I will check something now!");
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>