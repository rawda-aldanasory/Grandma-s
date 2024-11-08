<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandma's</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Home/bootstrap.min.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Grandmama CSS -->
    <link rel="stylesheet" href="Home/style.css">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="navbar/navStyle.css">
    <!-- Footer CSS -->
    <link rel="stylesheet" href="footer/footer.css">
    <!-- Our Clients CSS -->
    <link rel="stylesheet" href="OurClients/OurClients.css">
    <link rel="stylesheet" href="OurClients/slick.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Home Menu CSS -->
    <link rel="stylesheet" href="homeMenu/homeMenu.css">

    <!-- About us -->
    <link rel="stylesheet" href="AboutUs/aboutUs.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Our Clients CSS -->
    <link rel="stylesheet" href="OurClients/slick.css">
</head>

</head>

<body>
    <?php
    include 'navbar/nav.php';

    include 'Home/home.php';

    include 'OurClients/OurClients.php';

    include 'homeMenu/homeMenu.php';
    
    include 'AboutUs/AboutUs.php';

    include 'footer/footer.php';


    ?>

    <!-- jQuery Min JS -->
    <script src="Home/jquery.min.js"></script>
    <!-- Slicknav JS -->
    <script src="Home/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="Home/owl-carousel.js"></script>
    <!-- Main JS -->
    <script src="Home/main.js"></script>
    <!-- Smooth Scroll (new) -->
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    
    <!-- Home Menu  -->
    <script src="homeMenu/homeMenu.js"></script>

    <!-- Initialize Smooth Scroll -->
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 800
        });
    </script>

    <!-- Our Clients JS -->
    <script src="OurClients/OurClients.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Smooth Scroll (new) -->
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>

</html>
</body>

</html>