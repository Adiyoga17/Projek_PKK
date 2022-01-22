<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dapur Ibu Ayulia Website</title>
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link To CSS -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo"><img src="images/Peach and Brown Spoon and Fork Soft Organic Food Logo.png" alt="" width="110" height="100">
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>
    <!-- Home  Section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Food Taste</h1>
            <h2>The tasty food of <br> your choice</h2>
            <a href="menu.php" class="btn">View Menu</a>
        </div>
        <div class="home-img">
            <img src="images/3.png" alt="">
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/4.png" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>We make good and <br> tasty food</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut quo iure rem ducimus tenetur deserunt commodi doloribus, quibusdam vel fuga?</p>
            <a href="#" class="btn">Lear More</a>
        </div>
    </section>


    <!-- Service -->
    <section class="services" id="services">
        <div class="heading">
            <span>Services</span>
            <h2>We provide best food services</h2>
        </div>

        <div class="servives-container">
            <!-- Box 1 -->
            <div class="s-box">
                <img src="images/order.png" alt="">
                <h3>You Order</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum temporibus.</p>
            </div>
            <!-- Box 2 -->
            <div class="s-box">
                <img src="images/delivery-truck.png" alt="">
                <h3>Shipping</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum temporibus.</p>
            </div>
            <!-- Box 3 -->
            <div class="s-box">
                <img src="images/shipping.png" alt="">
                <h3>Delivered</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum temporibus.</p>
            </div>
        </div>
    </section>

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Let's Talk</span>
            <h2>Connect now</h2>
        </div>
        <a href="#" class="btn">Contact Us</a>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Food Taste</h3>
            <span>Connect With Us</span>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Menu Links</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>
        <div class="contact-box">
            <h3>Quick Links</h3>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#Privacy Policy">Privacy Policy</a></li>
            <li><a href="#Disclaimer">Disclaimer</a></li>
            <li><a href="#Terms Of Use">Terms Of Use</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class='bx bxs-map' ><span>JL. Gunung Andakasa no. 11, Denpasar Barat, Bali</span></i>
            <i class='bx bxs-phone' ><span>+62 87761490509</span></i>
            <i class='bx bxs-envelope' ><span>ayulia1030@email.com</span></i>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved.</p>
    </div>


    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="main.js"></script>
</body>
</html>