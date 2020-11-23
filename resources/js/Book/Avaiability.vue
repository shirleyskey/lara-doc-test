<template>
    <div>
        <h3 class="text-uppercase font-weight-bolder mb-4">Check Avaiability</h3>
        <span v-if="noAvailibility" class="text-danger">(NOT AVAILIBILITY)</span>
        <span v-if="hasAvailibility" class="text-success">(AVAILABLE)</span>
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
                    :class="[{'is-invalid': this.errorFor('from')}]"
                    >
                <div class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('from')" :key="'from' + index"
                >
                {{error}}
                </div>
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
                     :class="[{'is-invalid': this.errorFor('to')}]"
                    >
                <div class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('to')" :key="'to' + index"
                >
                 {{error}}
                </div>
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
            },
            errorFor(field){
                return this.hasErrors && this.errors[field] ? this.errors[field] : null;
            }
        }, 
        computed: {
            hasErrors(){
                return 422 === this.status && this.errors !== null;
            },
            hasAvailibility(){
                return 200 === this.status;
            }, 
            noAvailibility(){
                return 400 === this.status;
            }

        }
    }
</script>

<style lang="scss" scoped>

</style>