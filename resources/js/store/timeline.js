import axios from "axios";

export default {
    namespaced: true,
    state() {
        return {
            tweets: []
        }
    },
    getters: {
        tweets(state) {
            return state.tweets.sort((a,b) => b.created_at - a.created_at);
        }
    },
    mutations: {
        PUSH_TWEETS(state, tweets) {
            const tweetIds = state.tweets.map(t => t.id)
            state.tweets.push(
                ...tweets.filter( tweet => !tweetIds.includes(tweet.id) )
            )
        }
    },
    actions: {
        async loadPagetweets({ commit }, page = 1) {
            const url = route('api.timeline', { page })
            const { data } = await axios.get(url)
            commit('PUSH_TWEETS', data.data)
        }
    }
}