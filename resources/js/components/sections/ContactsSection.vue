<script setup>
import BaseContainer from '@/components/ui/BaseContainer.vue'

import ContactForm from '@/components/contact/ContactForm.vue'
import ContactInfo from '@/components/contact/ContactInfo.vue'
</script>

<template>

<section
    id="contacts"
    class="py-24 lg:py-36"
>

<BaseContainer>

    <div
        v-reveal
        class="mx-auto mb-20 max-w-3xl text-center"
    >

        <span
            class="inline-flex rounded-full border border-border bg-surface px-5 py-2 text-sm text-primary"
        >
            Связаться с нами
        </span>

        <h2
            class="mt-6 text-4xl font-medium leading-tight tracking-tight md:text-5xl"
        >
            Готовы обсудить
            <span class="text-primary">
                сотрудничество?
            </span>
        </h2>

        <p
            class="mx-auto mt-8 max-w-2xl text-lg leading-8 text-text-muted"
        >
            Расскажите о вашей задаче —
            мы подготовим коммерческое предложение
            и подберем оптимальное решение
            для вашего предприятия.
        </p>

    </div>

    <div
        class="grid gap-10 lg:grid-cols-[1fr_1fr]"
    >

        <ContactForm />

        <ContactInfo />

    </div>

</BaseContainer>

</section>

</template>
