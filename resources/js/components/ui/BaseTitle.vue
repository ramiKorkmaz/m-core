<script setup>
defineProps({
    tag: {
        type: String,
        default: 'h2'
    }
})
</script>

<template>

    <component :is="tag" class="font-semibold leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,5rem)]">
        <slot/>
    </component>

</template>
