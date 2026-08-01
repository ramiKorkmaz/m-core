<script setup>
import BaseContainer from '@/components/ui/BaseContainer.vue'

import Owner1 from '@/assets/images/owners/owner-1.png'
import Owner2 from '@/assets/images/owners/owner-2.png'

import Pepsi from '@/assets/images/partners/pepsico.svg'
import Philip from '@/assets/images/partners/philip-morris.webp'
</script>

<template>
<section id="about" class="py-24 lg:py-36">

<BaseContainer>

    <!-- Header -->

    <div
        v-reveal
        class="mx-auto mb-24 max-w-3xl text-center"
    >

        <span
            class="inline-flex rounded-full border border-border bg-surface px-5 py-2 text-sm text-primary"
        >
            О компании
        </span>

        <h2
            class="mt-6 text-4xl font-medium leading-tight tracking-tight md:text-5xl"
        >
            Не просто поставщик.
            <span class="text-primary">
                Люди, которые строят M-Core.
            </span>
        </h2>

    </div>

    <!-- Story + Owners -->

    <div class="grid gap-20 lg:grid-cols-2">

        <!-- LEFT -->

        <div v-reveal>

            <h3 class="text-3xl font-medium">
                История компании
            </h3>

            <div class="mt-8 h-px w-24 bg-primary/40"></div>

            <p class="mt-8 text-lg leading-9 text-text-muted">

                M-Core появилась благодаря практическому опыту работы
                в сфере снабжения предприятий.

            </p>

            <p class="mt-8 text-lg leading-9 text-text-muted">

                Мы хорошо понимаем, насколько важно получать
                качественную продукцию вовремя.
                Поэтому выстроили работу так, чтобы наши клиенты
                могли полностью сосредоточиться на своем бизнесе,
                а вопросы снабжения доверить нам.

            </p>

            <p class="mt-8 text-lg leading-9 text-text-muted">

                Сегодня мы комплексно обеспечиваем предприятия
                средствами индивидуальной защиты,
                спецодеждой,
                расходными материалами
                и дезинфекционными средствами,
                уделяя особое внимание надежности поставок
                и качеству сервиса.

            </p>

        </div>

        <!-- RIGHT -->

        <div
            v-reveal="150"
            class="grid gap-8 sm:grid-cols-2"
        >

            <!-- Owner -->

            <div
                class="rounded-3xl border border-border bg-surface p-6"
            >

                <img
                    :src="Owner1"
                    class="aspect-square w-full rounded-2xl object-cover"
                >

                <h4 class="mt-6 text-xl font-medium">
                    Бондаренко Михаил
                </h4>

                <p class="mt-2 text-sm text-primary">
                    Сооснователь
                </p>

                <p class="mt-6 text-sm leading-7 text-text-muted italic">
                    «Мы строим компанию,
                    которой сами доверили бы
                    снабжение собственного предприятия.»
                </p>

            </div>

            <div
                class="rounded-3xl border border-border bg-surface p-6"
            >

                <img
                    :src="Owner2"
                    class="aspect-square w-full rounded-2xl object-cover"
                >

                <h4 class="mt-6 text-xl font-medium">
                    Баширов Рамил
                </h4>

                <p class="mt-2 text-sm text-primary">
                    Сооснователь
                </p>

                <p class="mt-6 text-sm leading-7 text-text-muted italic">
                    «Надежное партнерство начинается
                    с ответственности
                    за каждую поставку.»
                </p>

            </div>

        </div>

    </div>

    <!-- Partners -->

    <div
        v-reveal
        class="mt-32"
    >

        <div
            class="rounded-[32px] border border-border bg-surface p-12"
        >

            <div class="text-center">

                <span class="text-primary">
                    Нам доверяют
                </span>

                <h3 class="mt-4 text-3xl font-medium">

                    Среди наших клиентов —
                    международные компании,
                    предъявляющие высокие требования
                    к качеству поставок.

                </h3>

            </div>

            <div
                class="mt-16 flex flex-wrap items-center justify-center gap-16"
            >

                <img
                    :src="Pepsi"
                    class="h-32 opacity-70 transition duration-300 hover:opacity-100"
                >

                <img
                    :src="Philip"
                    class="h-32 opacity-70 transition duration-300 hover:opacity-100"
                >

            </div>

        </div>

    </div>

</BaseContainer>

</section>
</template>
