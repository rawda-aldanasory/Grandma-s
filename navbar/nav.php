<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="navStyle.css">
    <title>Grandma's</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark" aria-label="Grandma's navigation bar">
        <div class="container">
            <a class="navbar-brand recoleta-font" href="index.php">Grandma's<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsGrandma" aria-controls="navbarsGrandma" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsGrandma">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#homeMenu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>

                <!-- Cart Icon -->
                <div class="cart-icon ms-3">
                    <div id="cartButton" class="custom-cart-icon">
                        <i class="bi bi-cart fa-lg"></i>
                        <span class="cart-count" id="cartCount">0</span>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        let cartCount = 0;

        document.getElementById('addToCartButton').addEventListener('click', function() {
            cartCount++;
            document.getElementById('cartCount').innerText = cartCount;
        });
    </script>  -->
</body>

</html>