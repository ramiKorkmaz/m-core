<script setup>
import { computed, nextTick, ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

import BaseButton from '@/components/ui/BaseButton.vue'
import BaseInput from '@/components/ui/BaseInput.vue'
import BaseTextarea from '@/components/ui/BaseTextarea.vue'

import logoMark from '@/assets/images/Logo-M.svg'

const form = useForm({
    name: '',
    company: '',
    phone: '',
    message: '',
})

const submitted = ref(false)
const success = ref(false)
const showSuccessContent = ref(false)

const nameInput = ref()
const phoneInput = ref()
const messageInput = ref()

const errors = computed(() => ({
    name:
        submitted.value &&
        !form.name.trim()
            ? 'Введите ваше имя.'
            : '',

    phone:
        submitted.value &&
        form.phone.replace(/\D/g, '').length !== 11
            ? 'Введите полный номер телефона.'
            : '',
}))

const focusFirstError = async () => {

    await nextTick()

    if (errors.value.name) {
        nameInput.value.focus()
        return
    }

    if (errors.value.phone) {
        phoneInput.value.focus()
        return
    }

}

const submit = () => {

    submitted.value = true

    if (
        errors.value.name ||
        errors.value.phone
    ) {

        focusFirstError()

        return

    }

    form.post('/contact', {

        preserveScroll: true,

        onSuccess: () => {

            success.value = true

            showSuccessContent.value = false

            form.reset()

            submitted.value = false

            setTimeout(() => {

                showSuccessContent.value = true

            }, 700)

        },

    })

}
</script>

<template>

<Transition name="fade-scale" mode="out-in">

<div
    v-if="success" key="success"
    class="rounded-[32px] border border-border bg-surface p-8 lg:p-12"
>

    <div class="flex flex-col items-center justify-center py-10 text-center">

        <div class="success-logo">

            <svg
                class="success-ring"
                width="120"
                height="120"
                viewBox="0 0 120 120"
            >

                <circle
                    class="success-ring-circle"
                    cx="60"
                    cy="60"
                    r="56"
                />

            </svg>

            <img
                :src="logoMark"
                alt="M-Core"
                class="success-mark"
            >

            <div class="success-shine"></div>

        </div>

        <Transition name="success-content">

            <div
                v-if="showSuccessContent"
            >

                <h3 class="text-4xl font-semibold text-text">
                    Спасибо!
                </h3>

                <p class="mt-6 max-w-xl text-lg leading-8 text-text-secondary">

                    Мы получили вашу заявку.

                    <br><br>

                    Наш специалист свяжется
                    с вами в ближайшее рабочее время.

                </p>

                <BaseButton
                    class="mt-12"
                    @click="
                        success = false;
                        showSuccessContent = false;
                    "
                >
                    Отправить ещё одну заявку
                </BaseButton>

            </div>

        </Transition>

    </div>

</div>

<form
    v-else
    @submit.prevent="submit" key="form"
    class="rounded-[32px] border border-border bg-surface p-8 lg:p-12"
>

    <div class="space-y-8">

        <BaseInput
            ref="nameInput"
            v-model="form.name"
            label="Ваше имя *"
            :error="errors.name"
        />

        <BaseInput
            v-model="form.company"
            label="Компания"
        />

        <BaseInput
            ref="phoneInput"
            v-model="form.phone"
            label="Телефон *"
            mask="phone"
            :error="errors.phone"
        />

        <BaseTextarea
            ref="messageInput"
            v-model="form.message"
            label="Сообщение"
            :error="errors.message"
        />

    </div>

    <div class="mt-12">

        <BaseButton
            type="submit"
        >
            Получить коммерческое предложение
        </BaseButton>

    </div>

</form>
</Transition>

</template>

<style scoped>

.fade-scale-enter-active,
.fade-scale-leave-active {

    transition:
        opacity .35s ease,
        transform .35s ease;

}

.fade-scale-enter-from,
.fade-scale-leave-to {

    opacity: 0;

    transform:
        translateY(20px)
        scale(.97);

}

.fade-scale-enter-to,
.fade-scale-leave-from {

    opacity: 1;

    transform:
        translateY(0)
        scale(1);

}

.success-animation {

    display:flex;

    justify-content:center;

    margin-bottom:42px;

}

.success-circle {

    fill:none;

    stroke:rgba(196,176,109,.25);

    stroke-width:2;

    stroke-dasharray:302;

    stroke-dashoffset:302;

    animation:drawCircle .8s ease forwards;

}

.success-check {

    fill:none;

    stroke:#C4B06D;

    stroke-width:4;

    stroke-linecap:round;

    stroke-linejoin:round;

    stroke-dasharray:70;

    stroke-dashoffset:70;

    animation:drawCheck .45s ease .65s forwards;

}

@keyframes drawCircle {

    to {

        stroke-dashoffset:0;

    }

}

@keyframes drawCheck {

    to {

        stroke-dashoffset:0;

    }

}

.success-content-enter-active {

    transition:.45s ease;

}

.success-content-leave-active {

    transition:.25s ease;

}

.success-content-enter-from {

    opacity:0;

    transform:translateY(18px);

}

.success-content-enter-to {

    opacity:1;

    transform:none;

}



.success-logo {

    position: relative;

    display: flex;

    justify-content: center;

    align-items: center;

    width: 120px;

    height: 120px;

    margin: 0 auto 42px;

}

.success-ring {

    position: absolute;

    inset: 0;

    transform: rotate(-90deg);

}

.success-ring-circle {

    fill: none;

    stroke: rgba(196,176,109,.35);

    stroke-width: 2;

    stroke-linecap: round;

    stroke-dasharray: 352;

    stroke-dashoffset: 352;

    animation: drawRing .9s ease forwards;

}

.success-mark {

    width: 46px;

    z-index: 2;

    opacity: 0;

    transform: scale(.6);

    animation:
        logoAppear .45s ease .75s forwards,
        logoPulse 2.5s ease-in-out 1.3s infinite;

}

.success-shine {

    position: absolute;

    inset: -10px;

    border-radius: 50%;

    background:
        radial-gradient(circle,
        rgba(196,176,109,.18),
        transparent 70%);

    opacity: 0;

    animation: shine .9s ease 1.1s forwards;

}

@keyframes drawRing {

    to {

        stroke-dashoffset: 0;

    }

}

@keyframes logoAppear {

    from {

        opacity: 0;

        transform: scale(.6);

    }

    to {

        opacity: 1;

        transform: scale(1);

    }

}

@keyframes logoPulse {

    0%,100% {

        transform: scale(1);

    }

    50% {

        transform: scale(1.05);

    }

}

@keyframes shine {

    from {

        opacity: 0;

        transform: scale(.7);

    }

    to {

        opacity: 1;

        transform: scale(1.2);

    }

}
</style>
