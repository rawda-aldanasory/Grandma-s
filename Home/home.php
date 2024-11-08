<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandma's</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- Animate on Scroll CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

    <!-- Grandmama CSS -->
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* CSS for smoother transitions */
        .single-menu-item {
            opacity: 0; /* Start hidden */
            transform: translateY(20px); /* Initial position for animation */
            transition: opacity 0.7s ease-out, transform 0.7s ease-out; /* Smooth transition */
        }

        .single-menu-item.aos-animate {
            opacity: 1; /* Fade in */
            transform: translateY(0); /* Move to original position */
        }
    </style>
</head>
<body>

<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider">
            <img src="images/home/slider1.webp" alt="Slider Image 1" class="slider-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text" data-aos="fade-down">
                            <h1>Homemade <span>Meals</span> You Can <span>Trust!</span></h1>
                            <p>Enjoy freshly prepared, delicious homemade meals delivered right to your doorstep. Taste the love in every bite!</p>
                            <div class="button">
                                <a href="menu.php" class="btn">Order Now</a>
                                <a href="about.php" class="btn primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->

        <!-- Start Single Slider -->
        <div class="single-slider">
            <img src="images/home/slider2.webp" alt="Slider Image 2" class="slider-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text" data-aos="fade-down">
                            <h1>Delicious <span>Homemade</span> Food, Every Day!</h1>
                            <p>From traditional recipes to modern flavors, Grandma's serves meals made with care and love.</p>
                            <div class="button">
                                <a href="#" class="btn">Order Now</a>
                                <a href="#" class="btn primary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- Start Menu Section -->
<section class="menu">
    <div class="container">
        <div class="menu-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-menu-item -->
                    <div class="single-menu-item first" data-aos="fade-down">
                        <div class="inner">
                            <div class="icon"></div>
                            <div class="single-content" >
                                <span>Homestyle Cooking</span>
                                <h4>Our Specialties</h4>
                                <p>Our specialties are crafted with love and care, just like Grandma used to make.</p>
                                <a href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-menu-item -->
                    <div class="single-menu-item middle" data-aos="fade-down">
                        <div class="inner">
                            <div class="icon"></div>
                            <div class="single-content">
                                <span>Meal Plans</span>
                                <h4>Weekly Menus</h4>
                                <p>We know life can be busy, so our meal plans bring the comfort of homemade cooking straight to your table.</p>
                                <a href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- single-menu-item -->
                    <div class="single-menu-item last" data-aos="fade-down">
                        <div class="inner">
                            <div class="icon"></div>
                            <div class="single-content">
                                <span>Packaging</span>
                                <h4>Eco-Friendly</h4>
                                <p>Our eco-friendly packaging reflects our commitment to both great food and environmental care.</p>
                                <a href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Menu Section -->

<!-- AOS JS (Animate on Scroll) -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init({
            offset: 100,
            duration: 1250, 
            once: true
        });

        // Manually trigger AOS animations for menu items on page load
        const menuItems = document.querySelectorAll('.single-menu-item');
        menuItems.forEach(item => {
            item.setAttribute('data-aos', 'fade-down');
            item.classList.add('aos-animate'); // Manually add AOS classes for animations
        });
    });
</script>

<!-- jquery Min JS -->
<script src="jquery.min.js"></script>
<!-- Slicknav JS -->
<script src="slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="owl-carousel.js"></script>

<!-- Animate on Scroll JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

<!-- Main JS -->
<script src="main.js"></script>

<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 800
    });
</script>

</body>
</html>
