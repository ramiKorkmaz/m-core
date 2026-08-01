<script setup>
import BaseCard from '@/components/ui/BaseCard.vue'

defineProps({
    title: {
        type: String,
        required: true,
    },

    items: {
        type: Array,
        default: () => [],
    },

    image: {
        type: String,
        default: '',
    },
})
</script>

<template>
    <BaseCard
        class="group h-full overflow-hidden"
        padding="none"
    >
        <!-- IMAGE -->

        <div
            class="
                relative
                h-64
                overflow-hidden
                border-b
                border-border
                bg-[#0D1711]
            "
        >
            <img
                v-if="image"
                :src="image"
                :alt="title"
                class="
                    h-full
                    w-full
                    object-cover
                    transition-transform
                    duration-700
                    ease-[cubic-bezier(.16,1,.3,1)]
                    group-hover:scale-105
                "
            />

            <div
                v-else
                class="
                    flex
                    h-full
                    items-center
                    justify-center
                    text-border
                "
            >
                Image
            </div>
        </div>

        <!-- CONTENT -->

        <div class="p-8">

            <h3
                class="
                    text-2xl
                    font-medium
                    transition-colors
                    duration-300
                    group-hover:text-primary
                "
            >
                {{ title }}
            </h3>

            <ul class="mt-6 space-y-3">

                <li
                    v-for="item in items"
                    :key="item"
                    class="
                        flex
                        items-center
                        gap-3
                        text-text-muted
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

                    {{ item }}

                </li>

            </ul>

        </div>

    </BaseCard>
</template>
