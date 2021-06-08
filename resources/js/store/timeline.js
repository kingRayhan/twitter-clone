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
            return state.tweets;
        }
    },
    mutations: {
        PUSH_TWEETS(state, tweets) {
            state.tweets.push(...tweets)
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