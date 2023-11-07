    //<div class="One-counter" data-val="100">
    const counters = document.querySelectorAll('[class$="-counter"]');//'[class$="-counter"]' | selects all elements with a class attribute ending with "-counter." 
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetValue = parseInt(entry.target.getAttribute('data-val'));
                let currentValue = 0; // Change this to set the starting value
                const increment = targetValue / 50;// Adjust the speed here (eg- to make it count faster, you can use a smaller divisor | 1000,slower |10,faster)
                const counterInterval = setInterval(() => {
                    if (currentValue < targetValue) {
                        currentValue += increment;
                        entry.target.textContent = Math.round(currentValue);
                    } else {
                        entry.target.textContent = targetValue;
                        clearInterval(counterInterval);
                    }
                }, 10);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
    