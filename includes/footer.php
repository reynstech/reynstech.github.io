<!-- Footer -->
<footer class="footer bg-light text-dark pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold">REYNS Software Solutions</h5>
                <p>Smart, scalable solutions for healthcare, retail, ecommerce, and AI automation.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="/index.php" class="text-dark text-decoration-none">Home</a></li>
                    <li><a href="/about.php" class="text-dark text-decoration-none">About</a></li>
                    <li><a href="/services.php" class="text-dark text-decoration-none">Services</a></li>
                    <li><a href="/products.php" class="text-dark text-decoration-none">Products</a></li>
                    <li><a href="/ai.php" class="text-dark text-decoration-none">AI Solutions</a></li>
                    <li><a href="/contact.php" class="text-dark text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold">Contact</h6>
                <p><i class="fas fa-map-marker-alt me-2"></i> India | reynstechnologysolutions@gmail.com</p>
                <p><i class="fas fa-phone me-2"></i> +91 73822 43320</p>
            </div>
            <div class="col-lg-3 col-md-6 text-lg-end text-md-start">
                <h6 class="fw-bold">Follow Us</h6>
                <a href="#" class="text-primary me-3"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-primary me-3"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="https://www.youtube.com/@ReynsTechnologySolutions" target="_blank" class="text-primary me-3"><i class="fab fa-youtube fa-lg"></i></a>
            </div>
        </div>
        <div class="text-center text-muted pt-4 mt-4 border-top">
            &copy; <?= date('Y'); ?> REYNS Software Solutions. All rights reserved.
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<a href="#" class="btn btn-lg btn-light border shadow position-fixed bottom-0 end-0 m-4" id="backToTop" style="display:none; z-index:999;">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });
</script>

</body>

</html>