<script setup>
import AppLayout from '@layouts/AppLayout.vue'
import HeroSection from '../components/sections/HeroSection.vue';
import AdvantagesSection from '../components/sections/AdvantagesSection.vue';
import CategoriesSection from '../components/sections/CategoriesSection.vue';
import AboutSection from '../components/sections/AboutSection.vue';
import ContactsSection from '../components/sections/ContactsSection.vue';
</script>

<template>

    <AppLayout>

        <HeroSection />
        <AdvantagesSection />
        <CategoriesSection />
        <AboutSection />
        <ContactsSection />

    </AppLayout>

</template>
