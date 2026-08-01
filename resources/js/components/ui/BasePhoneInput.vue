<script setup>
import { computed, nextTick, ref } from 'vue'

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

const input = ref(null)

const active = computed(() => !!model.value)

const focus = () => {
    input.value?.focus()
}

defineExpose({
    focus,
})

const formatPhone = (value) => {

    let digits = value.replace(/\D/g, '')

    // убираем код страны если пользователь ввёл его
    if (digits.startsWith('8')) {
        digits = digits.substring(1)
    }

    if (digits.startsWith('7')) {
        digits = digits.substring(1)
    }

    // максимум 10 цифр
    digits = digits.substring(0, 10)

    let result = '+7'

    if (digits.length > 0) {
        result += ` (${digits.substring(0, 3)}`
    }

    if (digits.length >= 3) {
        result += `) ${digits.substring(3, 6)}`
    }

    if (digits.length >= 6) {
        result += ` ${digits.substring(6, 8)}`
    }

    if (digits.length >= 8) {
        result += ` ${digits.substring(8, 10)}`
    }

    return result
}

const onInput = (e) => {

    const digits = e.target.value.replace(/\D/g, '')

    model.value = formatPhone(digits)

    nextTick(() => {

        const pos = model.value.length

        input.value.setSelectionRange(pos, pos)

    })

}

const onFocus = () => {

    if (!model.value) {

        model.value = '+7'

        nextTick(() => {

            input.value.setSelectionRange(
                model.value.length,
                model.value.length
            )

        })

    }

}

const onKeyDown = (e) => {

    const allowedKeys = [
        'Backspace',
        'Delete',
        'ArrowLeft',
        'ArrowRight',
        'Tab',
        'Home',
        'End',
    ]

    if (allowedKeys.includes(e.key)) {
        return
    }

    // разрешаем только цифры
    if (!/^\d$/.test(e.key)) {
        e.preventDefault()
    }

}
</script>

<template>

<div>

    <div class="relative pt-3">

        <input
            ref="input"

            :value="model"

            inputmode="numeric"

            autocomplete="tel"

            @focus="onFocus"

            @input="onInput"

            @keydown="onKeyDown"

            class="peer contact-input"

            :class="{
                '!border-red-500': error,
                '!border-primary': active && !error,
            }"
        >

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
