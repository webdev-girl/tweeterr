
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('home-component', require('./components/HomeComponent.vue'));
Vue.component('profile', require('./components/profile/Profile.vue'));
Vue.component('tweet-component', require('./components/TweetComponent.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

const app = new Vue({
    el: '#app',
    data(){
        return{
            tweets: [{
                    id: 2,
                    user_id: 607,
                    tweet: "Gryphon. 'Do you know about this business?' the King added in an impatient tone: 'explanations take such a curious appearance in the pool, 'and she sits purring so nicely by the end of the words all.",
                    created_at: "2019-03-30 20:43:01",
                    updated_at: "2019-03-30 20:43:01",
                    createdDate: "1 day ago"
                    },
                    {
                    id: 3,
                    user_id: 607,
                    tweet: "Cheshire cats always grinned; in fact, a sort of thing never happened, and now here I am to see if she was small enough to get out again. That's all.' 'Thank you,' said the Hatter. 'You MUST.",
                    created_at: "2019-03-30 20:43:01",
                    updated_at: "2019-03-30 20:43:01",
                    createdDate: "1 day ago"
                    } ],
        }
    },
        props: ['tweets']

    }
});
const test = new Vue({
    el: '#tweetsWrapper',
    data(){
        return{
            tweets: [],
            lastTweetId: 0,
            lastTimeChecked: 0
        }
    },
    methods:{
        initialTweets(){
        axios.get("/api/tweetsbynumber/10")

        .then((response) => {
            this.tweets = response.data.data;
            this.lastTweetId = response.data.data[((response.data.data).length -1)]["id"];
            console.log(response.data.data);
        })

        },
        scroll(){
            window.onScroll = () => {
                if ((window.innerHieght + window.srcoll)>=
            (document.body.offsetHieght - 2)){

                    var startPoint = this.lastTweetId;
                if(new Date)getTime() > (this.lastTimeChecked + 5000)
                axios.get("/api/tweetsbynumberfromstartpoint/3/ = this.lastTweetId")
                .then((response) => {

                    var data = response.data.data;

                    for (var i = 0; i < data.length; i++){
                        this.tweets.push(data[i]);
                        this.lastTweetId = data[i]["id"];
                    }

                });

                this.lastTimeChecked = (new Date).getTime();
            }
        };
    }

},
    mounted() {
        this.initialTweets();
        this.scroll();
    }

 })
