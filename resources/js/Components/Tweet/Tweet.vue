<template>
    <div
        class="inline-block w-full p-4 border-b border-gray-500  hover:bg-gray-800"
    >
        <div class="flex">
            <tweet-profilephoto :user="tweet.user" />
            <div class="flex-1">
                <tweet-user :user="tweet.user" />
                <p class="text-gray-300 whitespace-pre-wrap">
                    {{ tweet.body }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import TweetUser from "@/Components/Tweet/TweetUsername";
import TweetProfilephoto from "@/Components/Tweet/TweetProfilephoto";
export default {
    name: "Tweet",
    components: { TweetUser, TweetProfilephoto },
    props: ["tweet"],
};
</script>

<style scoped></style>
