import { ref, onMounted, onUnmounted } from 'vue'

export function useActiveSection(ids = []) {
    const activeSection = ref('')
    let observer
    onMounted(() => {
        observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        activeSection.value = entry.target.id
                    }
                })
            },
            {
                threshold: 0.5,
            }
        )

        ids.forEach(id => {
            const element = document.getElementById(id)
            if (element) {
                observer.observe(element)
            }
        })
    })

    onUnmounted(() => {
        observer?.disconnect()
    })

    return {
        activeSection,
    }

}
