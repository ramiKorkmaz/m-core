<script setup>
import BaseContainer from '@/components/ui/BaseContainer.vue'

import Logo from '@/assets/images/Logo-Name.svg'
import LogoMark from '@/assets/images/Logo-M.svg'

const navigation = [
    {
        title: 'Преимущества',
        href: '#advantages',
    },
    {
        title: 'Категории',
        href: '#categories',
    },
    {
        title: 'О компании',
        href: '#about',
    },
    {
        title: 'Контакты',
        href: '#contact',
    },
]

const categories = [
    'Средства индивидуальной защиты',
    'Спецодежда',
    'Расходные материалы',
    'Дезинфекционные средства',
]

const currentYear = new Date().getFullYear()
</script>

<template>
    <footer
        class="
            relative
            overflow-hidden
            border-t
            border-border
            bg-background
        "
    >
        <!-- Фоновый знак M -->

        <img
            :src="LogoMark"
            alt=""
            aria-hidden="true"
            class="
                pointer-events-none
                absolute
                -bottom-20
                -right-20
                hidden
                w-[520px]
                select-none
                opacity-[0.025]
                lg:block
            "
        >

        <BaseContainer>
            <div class="relative z-10 py-16 md:py-20">

                <!-- Основная часть -->

                <div
                    class="
                        grid
                        gap-12
                        sm:grid-cols-2
                        xl:grid-cols-[1.25fr_.7fr_1fr_1fr]
                        xl:gap-16
                    "
                >
                    <!-- Бренд -->

                    <div class="sm:col-span-2 xl:col-span-1">
                        <a
                            href="/"
                            aria-label="M-Core — главная"
                            class="inline-flex"
                        >
                            <img
                                :src="Logo"
                                alt="M-Core"
                                class="w-[170px] md:w-[190px]"
                            >
                        </a>

                        <p
                            class="
                                mt-7
                                max-w-sm
                                text-base
                                leading-7
                                text-text-muted
                            "
                        >
                            Комплексное снабжение предприятий средствами
                            индивидуальной защиты, спецодеждой, расходными
                            материалами и дезинфекционными средствами.
                        </p>

                        <p
                            class="
                                mt-6
                                inline-flex
                                items-center
                                gap-3
                                text-sm
                                text-primary
                            "
                        >
                            <span
                                class="
                                    h-1.5
                                    w-1.5
                                    rounded-full
                                    bg-primary
                                "
                            />

                            Доставка по Алматы за 1–3 дня
                        </p>
                    </div>

                    <!-- Навигация -->

                    <div>
                        <h3
                            class="
                                text-sm
                                font-medium
                                uppercase
                                tracking-[0.18em]
                                text-primary
                            "
                        >
                            Навигация
                        </h3>

                        <nav class="mt-7">
                            <ul class="space-y-4">
                                <li
                                    v-for="item in navigation"
                                    :key="item.title"
                                >
                                    <a
                                        :href="item.href"
                                        class="
                                            text-sm
                                            text-text-muted
                                            transition-colors
                                            duration-300
                                            hover:text-text
                                        "
                                    >
                                        {{ item.title }}
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Категории -->

                    <div>
                        <h3
                            class="
                                text-sm
                                font-medium
                                uppercase
                                tracking-[0.18em]
                                text-primary
                            "
                        >
                            Продукция
                        </h3>

                        <ul class="mt-7 space-y-4">
                            <li
                                v-for="category in categories"
                                :key="category"
                                class="
                                    text-sm
                                    leading-6
                                    text-text-muted
                                "
                            >
                                {{ category }}
                            </li>
                        </ul>
                    </div>

                    <!-- Контакты -->

                    <div>
                        <h3
                            class="
                                text-sm
                                font-medium
                                uppercase
                                tracking-[0.18em]
                                text-primary
                            "
                        >
                            Контакты
                        </h3>

                        <div class="mt-7 space-y-6">
                            <div>
                                <p class="text-xs text-text-muted">
                                    Телефон
                                </p>

                                <a
                                    href="tel:+77777777777"
                                    class="
                                        mt-2
                                        inline-block
                                        text-base
                                        text-text
                                        transition-colors
                                        duration-300
                                        hover:text-primary
                                    "
                                >
                                    +7 (777) 777 77 77
                                </a>
                            </div>

                            <div>
                                <p class="text-xs text-text-muted">
                                    Электронная почта
                                </p>

                                <a
                                    href="mailto:info@m-core.kz"
                                    class="
                                        mt-2
                                        inline-block
                                        text-base
                                        text-text
                                        transition-colors
                                        duration-300
                                        hover:text-primary
                                    "
                                >
                                    info@m-core.kz
                                </a>
                            </div>

                            <div>
                                <p class="text-xs text-text-muted">
                                    Адрес
                                </p>

                                <p class="mt-2 text-base text-text">
                                    Алматы, Казахстан
                                </p>
                            </div>

                            <div>
                                <p class="text-xs text-text-muted">
                                    Режим работы
                                </p>

                                <p class="mt-2 text-base leading-7 text-text">
                                    Пн–Пт, 09:00–18:00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Нижняя часть -->

                <div
                    class="
                        mt-16
                        flex
                        flex-col
                        gap-4
                        border-t
                        border-border
                        pt-7
                        text-sm
                        text-text-muted
                        sm:flex-row
                        sm:items-center
                        sm:justify-between
                    "
                >
                    <p>
                        © {{ currentYear }} M-Core. Все права защищены.
                    </p>

                    <a
                        href="#"
                        class="
                            transition-colors
                            duration-300
                            hover:text-text
                        "
                    >
                        Политика конфиденциальности
                    </a>
                </div>

            </div>
        </BaseContainer>
    </footer>
</template>
