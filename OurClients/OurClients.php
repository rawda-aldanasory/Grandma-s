<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../Home/bootstrap.min.css">

<!-- Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Our Clients CSS -->
<link rel="stylesheet" href="OurClients.css">

<!-- AOS (Animate on Scroll) CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<body>
<section class="best-review" data-aos="fade-up">
    <div class="container" data-aos="fade-up">
        <div class="flex flex-col gap-2" data-aos="fade-up">
            <hr class="hr1" data-aos="fade-right">
            <h3 class="mb-15" data-aos="fade-up">Best Review</h3>
        </div>
        <div class="best-review-slider owl-carousel">
            <div class="review-item text-center">
                <div class="stars mb-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p class="review-text">"This product has changed my life! Highly recommend to everyone!"</p>
                <div class="reviewer d-flex align-items-center justify-content-center mt-3">
                    <img src="images/home/person1.jpeg" alt="Reviewer" class="reviewer-img rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <span class="reviewer-name">Rawda</span>
                </div>
            </div>
            <div class="review-item text-center">
                <div class="stars mb-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p class="review-text">"Great experience! Will definitely buy again."</p>
                <div class="reviewer d-flex align-items-center justify-content-center mt-3">
                    <img src="images/home/person2.jpg" alt="Reviewer" class="reviewer-img rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <span class="reviewer-name">Mohamed</span>
                </div>
            </div>
            <div class="review-item text-center">
                <div class="stars mb-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="review-text">"Outstanding service and quality! Five stars!"</p>
                <div class="reviewer d-flex align-items-center justify-content-center mt-3">
                    <img src="images/home/person3.jpg" alt="Reviewer" class="reviewer-img rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <span class="reviewer-name">Al-Sayed</span>
                </div>
            </div>
            <div class="review-item text-center">
                <div class="stars mb-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p class="review-text">"Good product, but there's room for improvement."</p>
                <div class="reviewer d-flex align-items-center justify-content-center mt-3">
                    <img src="images/home/person3.jpg" alt="Reviewer" class="reviewer-img rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <span class="reviewer-name">Hassan</span>
                </div>
            </div>
        </div>
        <hr class="hr2" data-aos="fade-left">
    </div>
</section>

<!-- AOS JS (Animate on Scroll) -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 150,
        duration: 1250,
        once: true
    });
</script>

<!-- jQuery Min JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Our Clients JS -->
<script src="OurClients.js"></script>
<script>
    $(document).ready(function () {
        // Initialize Owl Carousel for best review section
        $('.best-review-slider').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,  // Adjust speed if necessary
            autoplayHoverPause: true,
            items: 1, // Only one item will be shown at a time
        });
    });
</script>

<!-- Smooth Scroll JS -->
<script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 800
    });
</script>
