<template>
    <div class="w-12 h-12 mr-3">
        <img :src="user.avatar" class="rounded-full" />
    </div>
</template>

<script>
export default {
    props: ["user"],
};
</script>
