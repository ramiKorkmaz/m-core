<script setup>
import { onMounted, onUnmounted, ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import { Menu } from 'lucide-vue-next'
import { useActiveSection } from '@/composables/useActiveSection'

import BaseContainer from '@/components/ui/BaseContainer.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import MobileMenu from '@/components/layout/MobileMenu.vue'

import Logo from '@/assets/images/Logo-Name.svg'

const { activeSection } = useActiveSection([
    'advantages',
    'categories',
    'about',
    'contacts',
])

const mobileOpen = ref(false)
const scrolled = ref(false)

const menu = [
    {
        title: 'Преимущества',
        href: '#advantages',
    },
    {
        title: 'О компании',
        href: '#about',
    },
    {
        title: 'Каталог',
        href: '#categories',
    },
    {
        title: 'Контакты',
        href: '#contacts',
    },
]

const onScroll = () => {
    scrolled.value = window.scrollY > 30
}

onMounted(() => {
    window.addEventListener('scroll', onScroll)
    onScroll()
})

onUnmounted(() => {
    window.removeEventListener('scroll', onScroll)
})
</script>

<template>
    <header class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
        <BaseContainer>
            <div class="pt-6">
                <div class="flex items-center justify-between rounded-2xl border border-border px-6 transition-all duration-300" :class="[ scrolled ? 'h-16 bg-background/80 backdrop-blur-xl shadow-lg' : 'h-20 bg-background/45 backdrop-blur-md' ]">
                    <!-- Logo -->
                    <Link href="/" class="flex shrink-0 items-center">
                        <img :src="Logo" alt="M-Core" class="transition-all duration-300" :class="[ scrolled ? 'w-[145px]' : 'w-[170px]' ]">
                    </Link>
                    <!-- Navigation -->
                    <nav class="hidden items-center gap-14 lg:flex">
                        <Link v-for="item in menu" :key="item.title" :href="item.href" class="group relative text-sm font-medium text-text transition-colors duration-300" :class="activeSection === item.href.replace('#', '') ? 'text-primary' : 'text-text hover:text-primary'">{{ item.title }}
                            <span class="absolute -bottom-2 left-0 h-px bg-primary transition-all duration-300" :class="activeSection === item.href.replace('#', '') ? 'w-full' : 'w-0 group-hover:w-full'" />
                        </Link>
                    </nav>
                    <!-- CTA -->
                    <div class="hidden lg:block">
                        <BaseButton>Получить КП</BaseButton>
                    </div>
                    <!-- Mobile -->
                    <button class="flex h-11 w-11 items-center justify-center rounded-xl border border-border transition-all duration-300 hover:border-primary hover:text-primary lg:hidden" aria-label="Открыть меню" @click="mobileOpen = true">
                        <Menu class="h-6 w-6" />
                    </button>
                </div>
            </div>
        </BaseContainer>
        <MobileMenu :open="mobileOpen" @close="mobileOpen = false" />
    </header>
</template>
