document.addEventListener("DOMContentLoaded", function() {
    const testimonialSlider = document.querySelector(".testimonial-slider");
    const testimonials = document.querySelectorAll(".testimonial");

    // Clone the existing testimonials
    const clonedTestimonials = Array.from(testimonials).map(testimonial => testimonial.cloneNode(true));

    // Append cloned testimonials to the end
    clonedTestimonials.forEach(testimonial => {
        testimonialSlider.appendChild(testimonial);
    });

    // Function to animate the testimonial slider
    function animateSlider() {
        const firstTestimonial = testimonialSlider.firstElementChild;
        const testimonialWidth = firstTestimonial.offsetWidth;

        // Animate the slider to move to the left by one testimonial width
        testimonialSlider.style.transition = "transform 0.5s ease-in-out";
        testimonialSlider.style.transform = `translateX(-${testimonialWidth}px)`;

        // Reset the transform property after animation completes
        setTimeout(() => {
            testimonialSlider.style.transition = "none";
            testimonialSlider.style.transform = "translateX(0)";
            testimonialSlider.appendChild(firstTestimonial);
        }, 500); // Adjust this delay to match your CSS transition duration
    }

    // Automatically animate the slider at a set interval
    setInterval(animateSlider, 3000); // Adjust the interval as needed
});
