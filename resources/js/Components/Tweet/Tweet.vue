<template>
    <div
        class="inline-block w-full p-4 border-b border-gray-500  hover:bg-gray-800"
    >
        <div class="flex">
            <div class="w-12 h-12 mr-3">
                <img :src="tweet.user.avatar" class="rounded-full" />
            </div>
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
export default {
    name: "Tweet",
    components: { TweetUser },
    props: ["tweet"],
};
</script>

<style scoped></style>
