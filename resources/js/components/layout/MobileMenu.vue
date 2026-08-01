<script setup>
import { watch } from 'vue'
import { Link } from '@inertiajs/vue3'
import { X } from 'lucide-vue-next'

import BaseButton from '@/components/ui/BaseButton.vue'

const props = defineProps({
    open: {
        type: Boolean,
        default: false,
    },
})

const emit = defineEmits(['close'])

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

watch(
    () => props.open,
    (value) => {
        document.body.style.overflow = value ? 'hidden' : ''
    }
)
</script>

<template>
    <Transition name="fade">
        <div v-if="open" class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm" @click.self="emit('close')">
            <Transition name="slide">
                <aside class="absolute right-0 top-0 flex h-full w-[340px] max-w-[90vw] flex-col border-l border-border bg-background p-8">
                    <!-- Header -->
                    <div class="mb-12 flex items-center justify-between">
                        <h2 class="text-lg font-semibold">Меню</h2>
                        <button class="flex h-11 w-11 items-center justify-center rounded-xl border border-border transition-all duration-300 hover:border-primary hover:text-primary" @click="emit('close')">
                            <X class="h-5 w-5" />
                        </button>
                    </div>
                    <!-- Navigation -->
                    <nav class="flex flex-col gap-6">
                        <Link v-for="item in menu" :key="item.title" :href="item.href" class="text-xl font-medium text-text transition-colors duration-300" :class="activeSection === item.href.replace('#', '') ? 'text-primary' : 'text-text hover:text-primary'" @click="emit('close')">{{ item.title }}</Link>
                    </nav>
                    <!-- Bottom -->
                    <div class="mt-auto">
                        <BaseButton class="w-full">Получить КП</BaseButton>
                    </div>
                </aside>
            </Transition>
        </div>
    </Transition>
</template>

<style scoped>

.fade-enter-active,
.fade-leave-active{
    transition:.25s;
}

.fade-enter-from,
.fade-leave-to{
    opacity:0;
}

.slide-enter-active,
.slide-leave-active{
    transition:.35s cubic-bezier(.16,1,.3,1);
}

.slide-enter-from,
.slide-leave-to{
    transform:translateX(100%);
}

</style>
