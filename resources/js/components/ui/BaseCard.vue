<script setup>
import { computed } from 'vue'

const props = defineProps({
    hover: {
        type: Boolean,
        default: true,
    },

    padding: {
        type: String,
        default: 'md',
    },
})

const paddingClass = computed(() => ({
    sm: 'p-6',
    md: 'p-8',
    lg: 'p-10',
}[props.padding]))
</script>

<template>

    <div :class="[ 'group relative overflow-hidden rounded-3xl', 'border border-border', 'bg-surface', 'transition-all duration-300 ease-[cubic-bezier(.16,1,.3,1)]', hover && [ 'hover:border-primary/70', 'hover:bg-[#131F18]', ], paddingClass, ]">
        <!-- Glow -->
        <div class="pointer-events-none absolute inset-0 rounded-3xl opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <div class="absolute inset-0 rounded-3xl shadow-[0_0_60px_rgba(183,174,114,.12)]"/>
        </div>
        <slot />
    </div>

</template>
