<script setup>
defineProps({
    padding: {
        type: String,
        default: 'p-8'
    },
    glow: {
        type: Boolean,
        default: false
    }
})
</script>

<template>

    <div class="frame-panel" :class="{ 'frame-panel--glow': glow }">
        <div :class="padding">
            <slot/>
        </div>
    </div>

</template>
