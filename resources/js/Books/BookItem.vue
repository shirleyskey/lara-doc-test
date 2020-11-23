<template>
    <div>
        
        <router-link :to="{name: 'detail', params: {id:id}}">
            <h3>{{title}}</h3>
        </router-link>
        <p>{{content}}</p>
    </div>
</template>

<script>
    export default {
        props: [
            "id", "title", "content"
        ]
    }
</script>

<style lang="scss" scoped>

</style>