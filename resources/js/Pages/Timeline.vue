<template>
    <TimelineLayout>
        <Tweet v-for="tweet in tweets" :tweet="tweet" :key="tweet.id" />
        <div v-observe-visibility="visibilityChanged"></div>
    </TimelineLayout>
</template>

<script>
import TimelineLayout from "@/Layouts/TimelineLayout";
import Tweet from "@/Components/Tweet/Tweet";
import { mapMutations, mapGetters } from "vuex";

export default {
    name: "Timeline",
    components: { Tweet, TimelineLayout },
    props: ["resource"],

    methods: {
        ...mapMutations({
            getTweets: "timeline/PUSH_TWEETS",
        }),
        visibilityChanged() {
            console.log("d");
        },
    },
    computed: {
        ...mapGetters({
            tweets: "timeline/tweets",
        }),
    },

    mounted() {
        this.getTweets(this.resource.data);
    },
};
</script>

<style scoped></style>
