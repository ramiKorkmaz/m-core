<script setup>
import { computed } from 'vue'
import { Truck, ShieldCheck, MapPinned, Clock3, PackageCheck } from 'lucide-vue-next'

const props = defineProps({
    icon: {
        type: String,
        default: null,
    },
})

const icons = {
    truck: Truck,
    shield: ShieldCheck,
    map: MapPinned,
    clock: Clock3,
    package: PackageCheck,
}

const Icon = computed(() => icons[props.icon] || null)
</script>

<template>
    <div class="inline-flex items-center gap-3 rounded-full border border-border bg-white/5 px-5 py-3 text-sm font-medium text-primary backdrop-blur-md transition-all duration-300 hover:border-primary/50 hover:bg-white/8">
        <component :is="Icon" v-if="Icon" class="h-4 w-4" />
        <slot />
    </div>
</template>
