<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start();
  include('connection.php');
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    body {
      background: #000;
      color: #000;
    }

    .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

        <link rel="stylesheet" href="assets/css/owl-carousel.css">

        <link rel="stylesheet" href="assets/css/lightbox.css">
        <link rel="stylesheet" href="assets/css/productdetail.css">

</head>
<body>
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav d-flex align-items-center">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Men's</a></li>
                            <li class="scroll-to-section"><a href="#women">Women's</a></li>
                            <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                          

                            <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                            <li><h2 class="name12">
                                <?php
                                echo $_SESSION['name'];
                                ?></h2></li>
                               <li><i class='bx bxs-user'></i></li>
                        </ul>
                       
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>  
                </div>
            </div>
        </div>
    </header>
      <!-- content -->
<?php
  if(isset($_GET['product_id']) && $_GET['product_name']){
    $product_id = $_GET['product_id'];
    $product_name = $_GET['product_name'];
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($pro, $sql);
    if($row = mysqli_fetch_assoc($result)){    
 
?>
      <section class="section bg-light border-top mt-5" style="padding-top: 10rem;">
      <div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
          <img src = "assets/images/<?php echo $row['product_img'] ?>" alt = "">
          </div>
      </div>
      
      <div class = "img-select">
        <div class = "img-item">
          <a href = "#" data-id = "1">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "2">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "3">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "4">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg  " alt = "shoe image">
          </a>
        </div>
      </div>
    </div>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title"><?php echo $product_name?></h2>
      <!-- <a href = "#" class = "product-link">visit nike store</a> -->
      <div class = "product-rating">
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star-half-alt"></i>
        <!-- <span>4.7(21)</span> -->
      </div>

      <div class = "product-price">
        <!-- <p class = "last-price">Old Price: <span>$257.00</span></p> -->
        <p class = "new-price">New Price: <span><?php echo $row['product_price'] ?></span></p>
      </div>

      <div class = "product-detail">
        <h2>about this item: </h2>
        <p><?php echo $row['product_description'] ?></p>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
        <!-- <ul>
          <li>Color: <span>Black</span></li>
          <li>Available: <span>in stock</span></li>
          <li>Category: <span>Shoes</span></li>
          <li>Shipping Area: <span>All over the world</span></li>
          <li>Shipping Fee: <span>Free</span></li>
        </ul> -->
      </div>

      <div class = "purchase-info">
        <input type = "number" min = "0" value = "1">
        
        <button id="cart" type = "button" class = "btn" onclick="addtocart">
        <?php


// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add item to the cart  
function addToCart($productId, $Productprice) {
    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] += $Productprice;
    } else {
        $_SESSION['cart'][$productId] = $Productprice;
    }
}

// Handle the add-to-cart action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'], $_POST['Productprice'])) {
    $productId = intval($_POST['product_id']);
    $Productprice = intval($_POST['Productprice']);
    
    // Add the product to the cart
    addToCart($productId, $Productprice);

    echo "Product added to cart!";
}

// Display cart contents
function displayCart() {
    if (empty($_SESSION['cart'])) {
        echo "Your cart is empty.";
        return;
    }

    echo "<h2>Cart Contents:</h2>";
    foreach ($_SESSION['cart'] as $productId => $Productprice) {
        echo "Product ID: $productId | Quantity: $Productprice<br>";
    }
}
?>

          Add to Cart <i class = "fas fa-shopping-cart"></i>
        </button>
        <button type = "button" class = "btn">Compare</button>
      </div>

      <div class = "social-links">
        <p>Share At: </p>
        <a href = "#">
          <i class = "fab fa-facebook-f"></i>
        </a>
        <!-- <a href = "#">
          <i class = "fab fa-twitter"></i>
        </a> -->
        <a href = "#">
          <i class = "fab fa-instagram"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-whatsapp"></i>
        </a>
        <!-- <a href = "#">
          <i class = "fab fa-pinterest"></i>
        </a> -->
      </div>
    </div>
  </div>
</div>
      </section>

      <?php
  }
}
      ?>
      <!-- Footer -->
      <footer >
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">B.No- 12 Lajpat Nagar,New Delhi-44</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">917011646561</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2025 HexaShop Co., Ltd. All Rights Reserved.

                            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">Singh Vivek</a>

                            <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">Viansi </a>
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      <!-- Footer -->

      <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<!-- Swiper JS -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
<script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>
</body>

</html>