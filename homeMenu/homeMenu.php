<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="home/bootstrap.min.css">

<!-- Animate on Scroll CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

<link rel="stylesheet" href="menuStyles.css">

<!-- Menu Section -->
<div class="container mt-5" id="homeMenu">
  <h1 class="menuh1 recoleta-font">Top Picks</h1>
  <div class="row justify-content-center align-items-center">
      <!-- dish cards -->
      <div class="col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
        <div class="dish-card">
          <img src="images/home/lamb.jpg" alt="Dish Image" class="dish-image">
          <div class="price-tag">$12.99</div>
          <div class="dish-info">
            <span class="dish-name">Lamb with Savory Sauce</span>
            <span class="favorite-icon" data-id="1">&#9829;</span>
          </div>
          <button class="order-button">Order Now</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
        <div class="dish-card">
          <img src="images/home/grapeleaves.jpg" alt="Dish Image" class="dish-image">
          <div class="price-tag">$9.99</div>
          <div class="dish-info">
            <span class="dish-name">Traditional Wara' Enab</span>
            <span class="favorite-icon" data-id="2">&#9829;</span>
          </div>
          <button class="order-button">Order Now</button>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
        <div class="dish-card">
          <img src="images/home/Koshary.jpg" alt="Dish Image" class="dish-image">
          <div class="price-tag">$3.99</div>
          <div class="dish-info">
            <span class="dish-name">Classic Koshary</span>
            <span class="favorite-icon" data-id="3">&#9829;</span>
          </div>
          <button class="order-button">Order Now</button>
        </div>
      </div>

      <!-- Show More Button aligned on the left -->
      <div class="col-md-4 col-sm-6 col-12 mb-4 d-flex justify-content-start align-items-center">
        <button class="learn-more" data-aos="fade-up"> 
          <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
          </span>
          <span><a class="button-text" href="MainMenu/MainMenu.php">Show More</a></span>
        </button>
      </div>
  </div>
</div>

  <!-- AOS JS (Animate on Scroll) -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      AOS.init({
        offset: 100,
        duration: 1250,
        once: true
      });
    });
  </script>

<!-- jQuery Min JS -->
<script src="jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="bootstrap.min.js"></script>

<script src="homeMenu.js"></script>
