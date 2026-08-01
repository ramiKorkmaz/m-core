<script setup>
import { computed, ref } from 'vue'

const model = defineModel()

const props = defineProps({
    label: {
        type: String,
        required: true,
    },

    required: {
        type: Boolean,
        default: false,
    },

    error: {
        type: String,
        default: '',
    },
})

const textarea = ref(null)

const active = computed(() => {
    return !!model.value?.toString().trim()
})

const focus = () => {
    textarea.value?.focus()
}

defineExpose({
    focus,
})
</script>

<template>

<div>

    <div class="relative pt-3">

        <textarea
            ref="textarea"
            v-model="model"
            :required="required"
            rows="6"
            class="peer contact-input min-h-40 resize-none"
            :class="{
                '!border-red-500': error,
                '!border-primary': active && !error,
            }"
        />

        <label
            class="pointer-events-none absolute left-0 bg-surface px-1 transition-all duration-300"
            :class="[
                active
                    ? '-top-2 text-xs text-primary'
                    : 'top-7 text-base text-text-muted',

                'peer-focus:-top-2',
                'peer-focus:text-xs',
                'peer-focus:text-primary',
            ]"
        >
            {{ label }}
        </label>

    </div>

    <Transition
        enter-active-class="transition duration-300"
        leave-active-class="transition duration-200"
        enter-from-class="opacity-0 -translate-y-1"
        leave-to-class="opacity-0 -translate-y-1"
    >
        <p
            v-if="error"
            class="mt-2 text-sm text-red-400"
        >
            {{ error }}
        </p>
    </Transition>

</div>

</template>
