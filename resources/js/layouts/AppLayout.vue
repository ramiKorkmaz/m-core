<script setup>
import AppHeader from '../components/layout/AppHeader.vue';
import AppFooter from '../components/layout/AppFooter.vue';
</script>

<template>

    <div class="min-h-screen bg-[var(--color-background)] text-[var(--color-text)]">

        <AppHeader />

        <main>
            <slot />
        </main>

        <AppFooter />

    </div>

</template>
