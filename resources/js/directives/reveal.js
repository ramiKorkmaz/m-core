export default {
    mounted(el, binding) {
        const delay = Number(binding.value) || 0

        el.style.opacity = '0'
        el.style.transform = 'translate3d(0,32px,0)'
        el.style.transition = `
            opacity .8s cubic-bezier(.16,1,.3,1),
            transform .8s cubic-bezier(.16,1,.3,1)
        `
        el.style.transitionDelay = `${delay}ms`
        el.style.willChange = 'opacity, transform'

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (!entry.isIntersecting) return

                requestAnimationFrame(() => {
                    el.style.opacity = '1'
                    el.style.transform = 'translate3d(0,0,0)'
                })

                observer.unobserve(el)
            },
            {
                threshold: 0.15,
                rootMargin: '0px 0px -80px 0px',
            }
        )

        observer.observe(el)
    },
}
