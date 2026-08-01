<script setup>
import BaseContainer from '@/components/ui/BaseContainer.vue'
import CategoryCard from '@/components/ui/CategoryCard.vue'

import PPE from '@/assets/images/categories/ppe.webp'
import Clothes from '@/assets/images/categories/clothes.webp'
import Consumables from '@/assets/images/categories/consumables.webp'
import Chemistry from '@/assets/images/categories/chemistry.webp'

const categories = [
    {
        title: 'Средства индивидуальной защиты',

        image: PPE,

        items: [
            'Каски',
            'Защитные очки',
            'Перчатки',
            'Респираторы',
        ],
    },

    {
        title: 'Спецодежда',

        image: Clothes,

        items: [
            'Летняя',
            'Зимняя',
            'Сигнальная',
            'Рабочая обувь',
        ],
    },

    {
        title: 'Расходные материалы',

        image: Consumables,

        items: [
            'Перчатки',
            'Бахилы',
            'Салфетки',
            'Одноразовая продукция',
        ],
    },

    {
        title: 'Дезинфекционные средства',

        image: Chemistry,

        items: [
            'Концентраты',
            'Антисептики',
            'Моющие средства',
            'Профессиональная химия',
        ],
    },
]
</script>

<template>

<section id="categories" class="py-24 lg:py-36">

<BaseContainer>

    <div
        v-reveal
        class="mx-auto mb-20 max-w-3xl text-center"
    >

        <span
            class="
                inline-flex
                rounded-full
                border
                border-border
                bg-surface
                px-5
                py-2
                text-sm
                text-primary
            "
        >
            Категории продукции
        </span>

        <h2
            class="
                mt-6
                text-4xl
                font-medium
                leading-tight
                tracking-tight
                md:text-5xl
            "
        >
            Всё необходимое для комплексного снабжения предприятий
        </h2>

        <div class="my-8 flex justify-center">

            <div class="h-px w-24 bg-primary/40"></div>

        </div>

        <p
            class="
                text-lg
                leading-8
                text-text-muted
            "
        >
            Мы поставляем сертифицированные средства индивидуальной защиты,
            спецодежду, профессиональные расходные материалы
            и дезинфекционные средства.
        </p>

    </div>

    <div
        class="
            grid
            grid-cols-1
            gap-8
            md:grid-cols-2
        "
    >

        <div
            v-for="(category,index) in categories"
            :key="category.title"
            v-reveal="index*100"
        >

            <CategoryCard
                :title="category.title"
                :items="category.items"
                :image="category.image"
            />

        </div>

    </div>

</BaseContainer>

</section>

</template>
