<script setup>
import { computed, onBeforeUnmount, onMounted, ref, watch } from 'vue'
import IMask from 'imask'

const model = defineModel()

const props = defineProps({
    label: {
        type: String,
        required: true,
    },

    type: {
        type: String,
        default: 'text',
    },

    mask: {
        type: String,
        default: null,
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

const input = ref(null)

const active = computed(() => !!model.value?.toString().trim())

const focus = () => {
    input.value?.focus()
}

defineExpose({
    focus,
})

let maskInstance = null

onMounted(() => {

    if (props.mask !== 'phone') {
        return
    }

    maskInstance = IMask(input.value, {

        mask: '+{7} (000) 000 00 00',

        lazy: true,

    })

    maskInstance.on('accept', () => {

        model.value = maskInstance.value

    })

})

watch(model, value => {

    if (!maskInstance) {
        return
    }

    if (maskInstance.value !== value) {
        maskInstance.value = value || ''
    }

})

onBeforeUnmount(() => {

    maskInstance?.destroy()

})
</script>

<template>
    <div>
        <div class="relative pt-3">

            <input
                ref="input"
                v-model="model"
                :type="mask === 'phone' ? 'tel' : type"
                :required="required"
                :inputmode="mask === 'phone' ? 'numeric' : undefined"
                :autocomplete="mask === 'phone' ? 'tel' : undefined"
                placeholder=""
                class="peer contact-input"
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
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="opacity-0 -translate-y-2"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 -translate-y-2"
        >
            <p
                v-if="error"
                class="mt-2 flex items-center gap-2 text-sm text-red-400"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 shrink-0"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 9v4m0 4h.01M10.29 3.86L1.82 18A2 2 0 003.53 21h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"
                    />
                </svg>

                <span>{{ error }}</span>
            </p>
        </Transition>
    </div>
</template>
