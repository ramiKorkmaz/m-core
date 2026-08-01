<script setup>
defineProps({
    href: {
        type: String,
        default: null
    },
    type: {
        type: String,
        default: 'button',
    },
    variant: {
        type: String,
        default: 'primary'
    },
    disabled: {
        type: Boolean,
        default: false,
    },
})
</script>

<template>
    <component
        :is="href ? 'a' : 'button'"
        :href="href"
        :type="!href ? type : null"
        :disabled="disabled"
        :aria-disabled="disabled"
        class="inline-flex h-11 w-full items-center justify-center rounded-full px-8 font-medium transition-all duration-300 ease-out focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 focus-visible:ring-offset-background sm:w-auto"
        :class="[
            {
                'bg-primary text-background hover:bg-primary-hover': variant === 'primary' && !disabled,

                'border border-border text-text hover:border-primary hover:text-primary':
                    variant === 'outline' && !disabled,

                'text-text hover:bg-white/5':
                    variant === 'ghost' && !disabled,

                'opacity-50 cursor-not-allowed pointer-events-none':
                    disabled,
            }
        ]">
        <span class="relative z-10">
            <slot/>
        </span>
    </component>
</template>
