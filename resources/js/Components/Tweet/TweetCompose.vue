<template>
    <div class="p-4 border-b-8 border-gray-500">
        <div class="flex text-white">
            <tweet-profilephoto :user="$page.props.auth.user" />
            <form class="flex-1" @submit.prevent="save">
                <textarea
                    autofocus
                    class="w-full text-gray-300 bg-transparent border-0 resize-none  focus:ring-0"
                    cols="30"
                    rows="2"
                    v-model="body"
                    placeholder="What's happening?"
                ></textarea>

                <div class="flex justify-between py-2 border-t border-gray-600">
                    <div></div>
                    <TweetButton>Tweet</TweetButton>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import TweetProfilephoto from "./TweetProfilephoto.vue";
import TweetButton from "@/Components/Tweet/TweetButton";
import axios from "axios";
export default {
    components: { TweetProfilephoto, TweetButton },
    data() {
        return {
            body: "",
        };
    },
    methods: {
        async save() {
            await axios.post(route("tweets.store"), { body: this.body });
            this.body = ""
        },
    },
};
</script>
