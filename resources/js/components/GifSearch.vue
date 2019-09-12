<template>
<div>
        <div class="">
            <img :src="this.gif" alt="" />
            <input type="hidden" name="gif" :value="this.gif" />
        </div>
        <div class="gif-container">

                <input v-model="query" type="text" placeholder="GIF Search" class="form-control" />

                <button type="button" @click="doSearch" class=" btn btn-primary d-inline" >Go</button>
                <ul class="list-group">
                    <li class="list-group-item" @click="selectOne(index)" v-for="(result, index) in results">
                        <img :src="result.images.fixed_height.url" />
                    </li>
                </ul>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                apiKey: 'EXUoxgZA4Ksq3OvB9o75z0mHlrQqSUse',
                query: '',
                results: [],
                gif: ''
            }
        },

        methods: {
            doSearch() {
                axios.get( 'https://api.giphy.com/v1/gifs/search?api_key=' + this.apiKey + '&q=' + this.query)
                    .then ((response) => {
                        this.results = response.data.data;
                    })
            },
            selectOne(index) {
                this.gif = this.results[index].images.fixed_height.url
            }
    }
}
</script>


<style lang="scss">
</style>
