<script setup>
import BaseCard from '@/components/ui/BaseCard.vue'

defineProps({
    icon: {
        required: true,
    },

    title: String,

    description: String,

    code_index: Number,
})
</script>

<template>

    <BaseCard class="h-full">

        <!-- Arrow -->
        <!-- <div class="absolute top-8 right-8 h-6 w-6 transition-all duration-300 ease-[cubic-bezier(.16,1,.3,1)]">
            <span class="absolute top-0 right-0 h-px w-4 bg-border transition-all duration-300 group-hover:w-5 group-hover:bg-primary" />
            <span class="absolute top-0 right-0 w-px h-4 bg-border transition-all duration-300 group-hover:h-5 group-hover:bg-primary" />
        </div> -->
        <div class="absolute right-8 top-8 font-mono text-xs tracking-[0.25em] text-border transition-colors duration-300 group-hover:text-primary">{{ '[0' + (1 + code_index) + ']' }}</div>
        <!-- Icon -->
        <div class="mb-8 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary transition-all duration-300 group-hover:-translate-y-1 group-hover:scale-110">
            <component :is="icon" class="h-7 w-7" />
        </div>
        <!-- Text -->
        <h3 class="text-2xl font-medium transition-colors duration-300 group-hover:text-primary">{{ title }}</h3>
        <p class="mt-5 leading-8 text-text-muted transition-colors duration-300 group-hover:text-text">{{ description }}</p>

    </BaseCard>

</template>
