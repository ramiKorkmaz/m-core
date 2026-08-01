<script setup>
import BaseContainer from '@/components/ui/BaseContainer.vue'
import FeatureCard from '@/components/ui/FeatureCard.vue'

import {
    Truck,
    ShieldCheck,
    MapPinned,
    Boxes,
    FileCheck,
    Building2,
} from 'lucide-vue-next'

const features = [
    {
        icon: Truck,
        title: 'Доставка за 1–3 дня',
        description: 'Быстро доставляем заказы по Алматы и организуем оперативные поставки по всему Казахстану.',
    },
    {
        icon: ShieldCheck,
        title: 'Сертифицированная продукция',
        description: 'Поставляем продукцию, соответствующую требованиям безопасности и действующим стандартам.',
    },
    {
        icon: MapPinned,
        title: 'Поставки по всему Казахстану',
        description: 'Организуем поставки в любой регион Казахстана с соблюдением согласованных сроков.',
    },
    {
        icon: Boxes,
        title: 'Широкий ассортимент',
        description: 'СИЗ, спецодежда и профессиональные расходные материалы для предприятий различных отраслей.',
    },
    {
        icon: FileCheck,
        title: 'Полный комплект документов',
        description: 'Предоставляем сертификаты, паспорта качества и всю необходимую документацию.',
    },
    {
        icon: Building2,
        title: 'Комплексное снабжение предприятий',
        description: 'Закрываем потребности бизнеса в СИЗ и расходных материалах через одного поставщика.',
    },
]
</script>

<template>
    <section id="advantages" class="py-24 lg:py-36">
        <BaseContainer>
            <div v-reveal class="mx-auto mb-20 max-w-3xl text-center">
                <span class="inline-flex rounded-full border border-border bg-surface px-5 py-2 text-sm text-primary">Преимущества</span>
                <h2 class="mt-6 text-4xl font-medium leading-tight tracking-tight md:text-5xl">Почему предприятия выбирают M-Core</h2>
                <div class="my-8 flex items-center justify-center gap-3">
                    <span class="h-px w-10 bg-primary/30"></span>
                    <span class="h-2 w-2 rounded-full bg-primary"></span>
                    <span class="h-px w-10 bg-primary/30"></span>
                </div>
                <p class="text-lg leading-8 text-text-muted">Мы обеспечиваем предприятия средствами индивидуальной защиты и расходными материалами, делая поставки быстрыми, надежными и удобными.</p>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div v-for="(feature, index) in features" :key="feature.title" v-reveal="index * 90">
                    <FeatureCard :icon="feature.icon" :title="feature.title" :description="feature.description" :code_index="index" />
                </div>
            </div>
        </BaseContainer>
    </section>
</template>
