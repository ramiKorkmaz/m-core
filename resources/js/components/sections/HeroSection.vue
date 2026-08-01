<script setup>
import BaseContainer from '@/components/ui/BaseContainer.vue'
import BaseBadge from '@/components/ui/BaseBadge.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import HeroStats from '@/components/ui/HeroStats.vue'

import HeroMark from '@/assets/images/Logo-M.svg'
</script>

<template>
    <section class="relative flex min-h-screen items-center overflow-hidden pb-20 lg:pb-32 mt-20">
        <BaseContainer>
            <div class="grid items-center gap-12 lg:gap-24 grid-cols-1 lg:grid-cols-[55%_45%]">
                <!-- LEFT -->
                <div class="hero__content order-2 lg:order-1">
                    <BaseBadge v-reveal="0" icon="truck">Доставка за 1-3 дня по Алмате</BaseBadge>
                    <h1 v-reveal="100" class="mt-8 max-w-3xl text-5xl md:text-6xl xl:text-7xl font-light leading-[0.95] tracking-tight">Скорость поставки, на которую можно рассчитывать.</h1>
                    <p v-reveal="250" class="mt-8 max-w-xl text-lg leading-8 text-text-muted">Комплексно обеспечиваем предприятия средствами индивидуальной защиты, спецодеждой и профессиональными расходными материалами с поставкой по Казахстану.</p>
                    <div v-reveal="400" class="mt-12 flex flex-col sm:flex-row gap-4">
                        <BaseButton class="w-full sm:w-auto">Получить КП</BaseButton>
                        <BaseButton class="w-full sm:w-auto" variant="outline">Каталог</BaseButton>
                    </div>
                    <!-- <HeroStats /> -->
                </div>
                <!-- RIGHT -->
                <div class="relative mt-10 flex min-h-[320px] items-center justify-center md:min-h-[500px] lg:mt-0 lg:min-h-[650px] order-1 lg:order-2">
                    <!-- <div class="hero__technical-lines">
                        <span class="hero__line line-1"></span>
                        <span class="hero__line line-2"></span>
                        <span class="hero__line line-3"></span>
                    </div> -->
                    <div class="hero__grid-bg"></div>
                    <div class="hero__glow"></div>
                    <img :src="HeroMark" alt="M-Core" class="hero__mark w-[280px] md:w-[420px] xl:w-[620px] z-[4]">
                </div>
            </div>
        </BaseContainer>
    </section>
</template>
