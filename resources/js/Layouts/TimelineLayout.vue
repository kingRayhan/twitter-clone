<template>
    <div class="wrapper">
        <div class="flex">
            <div class="w-3/12">
                <h1>Nav</h1>
            </div>
            <div class="w-7/12 h-screen border-l border-r border-gray-500">
                <div>
                    <h3
                        class="p-4 text-xl font-bold text-white uppercase border-b border-gray-500 "
                    >
                        Home
                    </h3>
                </div>

                <slot />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TimelineLayout",
};
</script>

<style scoped></style>
