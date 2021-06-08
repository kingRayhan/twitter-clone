export default {
    namespaced: true,
    state() {
        return {
            tweets: []
        }
    },
    getters: {
        tweets(state) {
            return state.tweets;
        }
    },
    mutations: {
        PUSH_TWEETS(state, tweet) {
            state.tweets.push(...tweet)
        }
    }

}