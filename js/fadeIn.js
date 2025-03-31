gsap.set('.js-fadeIn', {
    autoAlpha: 0,
    y: 50,
});

ScrollTrigger.batch('.js-fadeIn', {
    onEnter: batch => gsap.to(batch, {
        autoAlpha: 1,
        y: 0,
        stagger: 0.1,
        overwrite: true,
    }),
    start: 'top 70%',
    toggleActions: "play none none reverse",
});