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
                    id="from"
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
                    id="to"
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
                to: null, 
                loading: false, 
                status: null, 
                errors: null,
            }
        },
        methods: {
            check(){
                this.loading = true;
                this.errors = null;
                axios.get(`/api/booklist/${this.$route.params.id}/availibility/?from=${this.from}&to=${this.to}`)
                    .then( response => {
                        this.status = response.status;
                    })
                    .catch (error => {
                        if (422 === error.response.status) {
                            this.errors = error.response.data.errors;
                        }
                        this.status = error.response.status;
                    })
                    .then(() => (this.loading = false));
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>