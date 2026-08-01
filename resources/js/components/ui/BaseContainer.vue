<script setup>
defineProps({
    as: {
        type: String,
        default: 'div'
    }
})
</script>

<template>
    <component :is="as" class="mx-auto w-full max-w-[1440px] px-5 sm:px-8 xl:px-10">
        <slot />
    </component>
</template>
