<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="template/js/scripts.js"></script>
        <!-- AOS Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init({
                once: true // Animasi hanya terjadi sekali
            });
        </script>
        <script>
    // Get the current URL path
    const currentPath = window.location.pathname;

    // Get all nav links
    const navLinks = document.querySelectorAll('.nav-link');

    // Loop through the nav links to find the one that matches the current path
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active'); // Add 'active' class to the current link
        }
    });
</script>
<script src="path/to/bootstrap.bundle.js"></script> <!-- Sesuaikan dengan path bootstrap Anda -->
    <script src="path/to/custom.js"></script> <!-- Tambahkan jika ada custom JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


