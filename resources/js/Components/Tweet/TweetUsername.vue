<template>
    <div>
        <span class="text-base font-bold text-white">{{ user.name }}</span>
        <span class="inline-block ml-2 text-sm text-gray-400">
            @{{ user.username }}
        </span>
    </div>
</template>

<script>
export default {
    name: "TweetUser",
    props: ["user"],
};
</script>

<style scoped></style>
