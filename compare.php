<script>
    // Store the last scroll position
    let lastScrollTop = 0;

    // Get the header element
    const header = document.getElementById("site-header");

    window.addEventListener("scroll", () => {
        // Get the current scroll position
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Define a threshold for when to switch from sticky to fixed
        const threshold = 100; // Adjust this value as needed

        // Check the scroll direction
        if (scrollTop > lastScrollTop) {
            // Scrolling down, hide the header
            header.style.position = "sticky";
            header.style.animationName = "header_animation";
        } else if (scrollTop < threshold) {
            // Scrolling up near the top, make the header fixed
            header.style.position = "fixed";
            header.style.animationName = "header_animation";
        }

        // Update the last scroll position
        lastScrollTop = scrollTop;
    });
</script>