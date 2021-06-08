<template>
    <TimelineLayout>
        <TweetCompose />
        <Tweet v-for="tweet in tweets" :tweet="tweet" :key="tweet.id" />
        <div class="my-10 text-center">
            <TweetButton v-if="page <= lastPage" @click="loadMore">
                Load More
            </TweetButton>

            <p v-else class="text-gray-500">you reached at the last...</p>
        </div>
    </TimelineLayout>
</template>

<script>
import TimelineLayout from "@/Layouts/TimelineLayout";
import Tweet from "@/Components/Tweet/Tweet";
import TweetCompose from "@/Components/Tweet/TweetCompose";
import TweetButton from "@/Components/Tweet/TweetButton";
import { mapMutations, mapGetters, mapActions } from "vuex";

export default {
    name: "Timeline",
    components: { Tweet, TimelineLayout, TweetCompose, TweetButton },
    props: ["resource"],
    data() {
        return {
            page: 1,
            lastPage: null,
        };
    },
    methods: {
        ...mapMutations({
            getTweets: "timeline/PUSH_TWEETS",
        }),
        ...mapActions({
            loadPagetweets: "timeline/loadPagetweets",
        }),
        loadMore() {
            this.page++;
            this.loadPagetweets(this.page);
        },
    },
    computed: {
        ...mapGetters({
            tweets: "timeline/tweets",
        }),
    },

    mounted() {
        this.getTweets(this.resource.data);
        this.lastPage = this.resource.meta.last_page;
    },
};
</script>

<style scoped></style>
