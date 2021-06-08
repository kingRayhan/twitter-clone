<template>
    <button
        :type="type"
        class="px-4 py-2 text-sm font-bold text-white transition duration-300 rounded-full  bg-primary focus:outline-none hover:opacity-80"
    >
        <slot />
    </button>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: "submit",
        },
    },
};
</script>
