<template>

        <a href="#" @click="doLike">
            <i class="fa fa-thumbs-up"></i> {{ dataIsLiked ? 'Unlike' : 'Like' }} ( {{ dataCount }} )
        </a>

</template>

<script>

    export default {
        props: ['count', 'tweetId', 'isLiked' ],

        data(){
            return {
                dataIsLiked: false,
                dataCount: 0,
            }
        },

        mounted() {
            this.dataIsLiked = this.isLiked;
            this.dataCount = this.count;
        },

        methods: {
            doLike (e) {
                e.preventDefault();
                if(this.dataIsLiked){
                    var url = '/tweets/' + this.tweetId + '/unlike';
                } else {
                    var url = '/tweets/' + this.tweetId + '/like';
                }

                axios.post (url)
                    .then( (response) => {
                        if(this.dataIsLiked) {
                            this.dataCount--;
                            this.dataIsLiked = false;
                        } else {
                            this.dataCount++;
                            this.dataIsLiked = true;
                        }
                    })
            }
    }
}


</script>
<style lang="scss">

</style>
