<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="home/bootstrap.min.css">

<!-- Animate on Scroll CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- AOS JS (Animate on Scroll) -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
      offset: 100, /* Scroll offset for animations */
      duration: 1250, /* Duration of the animation */
      once: true /* Run animation only once */
    });
  });
</script>

<!-- jQuery Min JS -->
<script src="jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="bootstrap.min.js"></script>

<!-- Footer Section -->
<footer id="footer-section" class="main-padding overflow-hidden px-lg-5">
    <div class="container text-center">
        <!-- Footer Heading -->
        <h1 loading="lazy" class="img-fluid recoleta-font" data-aos="fade-up">Grandma's</h1>

        <!-- Footer Links Section -->
        <div class="footer-links d-flex justify-content-between w-100 mb-4">
            <!-- About Us Links Column -->
            <div class="footer-column" data-aos="fade-up">
                <h5>About Us</h5>
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact</a>
                <a href="#">FAQ</a>
            </div>

            <!-- Customer Service Links Column -->
            <div class="footer-column" data-aos="fade-up">
                <h5>Customer Service</h5>
                <a href="#">Shipping & Returns</a>
                <a href="#">Order Tracking</a>
                <a href="#">FAQs</a>
            </div>

            <!-- Explore Links Column -->
            <div class="footer-column" data-aos="fade-up">
                <h5>Explore</h5>
                <a href="#">Blog</a>
                <a href="#">Recipes</a>
                <a href="#">Events</a>
            </div>

            <!-- Email Subscription Column -->
            <div class="footer-column" data-aos="fade-up">
                <h5>Subscribe</h5>
                <form action="#" method="post" class="d-flex flex-column">
                    <input type="email" placeholder="Enter your email" required class="form-control mb-2" />
                    <button type="submit" class="subscribe-btn btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="social-links d-flex justify-content-center align-items-center mt-4" data-aos="fade-up">
            <!-- Social Media Icons -->
            <a href="https://www.facebook.com" class="social-icon">
                <span class="fa-stack fa-lg">
                    <i class="bg fa-solid fa-circle fa-stack-2x"></i>
                    <i class="fa-brands fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a href="https://www.google.com" class="social-icon">
                <span class="fa-stack fa-lg">
                    <i class="bg fa-solid fa-circle fa-stack-2x"></i>
                    <i class="fa-brands fa-google fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a href="https://www.linkedin.com" class="social-icon">
                <span class="fa-stack fa-lg">
                    <i class="bg fa-solid fa-circle fa-stack-2x"></i>
                    <i class="fa-brands fa-linkedin-in fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a href="https://www.twitter.com" class="social-icon">
                <span class="fa-stack fa-lg">
                    <i class="bg fa-solid fa-circle fa-stack-2x"></i>
                    <i class="fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </div>

        <!-- Footer Copyright Section -->
        <p class="footer-copyright text-white-50 mt-3" data-aos="fade-up">Copyright 2024. All rights reserved.</p>
    </div>
</footer>
