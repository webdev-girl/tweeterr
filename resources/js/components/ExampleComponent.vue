<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<!-- <template>
    <div id="tweetsWrapper">
        <div class="tweet-content">
            {{ tweet.tweet}}
        </div>
         by {{tweet.user_id}} @ {{tweet.created_at}}
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Tweet Component mounted.')
        },
        props: ['tweets']

    }

</script>

Vue.component('tweet', {
    props: ['tweetData'],
    template: `
        <div class="col-sm-4">
            <div class="tweet">
                <h5 v-text="tweetData.author"></h5>
                <p v-text="tweetData.message"></p>
            </div>
        </div>
    `
});

new Vue({
    el: '#demo-1',
    data: {
        tweets: null
    },
    mounted() {
        axios.get('http://james-allen.ca/projects/lessons/ajax/tweets.php')
            .then(response => {
                this.tweets = response.data
            });
    }
});

<div class="row">
    <tweet v-for="tweet in tweets" :tweet-data="tweet"></tweet>
</div> -->
