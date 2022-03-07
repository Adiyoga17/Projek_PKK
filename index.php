<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Burger Website</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <a class="navbar-brand">
                <img src="images/Peach and Brown Spoon and Fork Soft Organic Food Logo.png" width="45" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#services">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home  Section-->
    <section class="home" id="home" >
        <div class="home-text">
            <h1>Selamat Datang</h1>
            <h2>Di Dapur Ibu Ayulia<br> Silakan di lihat menunya</h2>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut quo iure rem ducimus tenetur deserunt
                commodi doloribus, quibusdam vel fuga?</p>
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
                <h3>Di Pesan</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum
                    temporibus.</p>
            </div>
            <!-- Box 2 -->
            <div class="s-box">
                <img src="images/delivery-truck.png" alt="">
                <h3>Di Antar</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum
                    temporibus.</p>
            </div>
            <!-- Box 3 -->
            <div class="s-box">
                <img src="images/shipping.png" alt="">
                <h3>Sampe Di tujuan</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum
                    temporibus.</p>
            </div>
        </div>
    </section>

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Let's Talk</span>
            <h2>Connect now</h2>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Sosmed</h3>
            <div class="social">
                <a class="text-dark" href="#"><i class="fab fa-instagram"> Instagram</i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Menu Links</h3>
            <li><a class="text-decoration-none" href="index.php#home">Home</a></li>
            <li><a class="text-decoration-none" href="index.php#about">About</a></li>
            <li><a class="text-decoration-none" href="menu.php">Menu</a></li>
            <li><a class="text-decoration-none" href="index.php#services">Service</a></li>
            <li><a class="text-decoration-none" href="index.php#contact">Contact</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class="fas fa-map-marker-alt"><span class="fw-normal">JL. Gunung Andakasa no. 11, Denpasar Barat, Bali</span></i>
            <i class="fas fa-phone-alt"><span class="fw-normal">+62 877 6149 0509</span></i>
            <i class="fas fa-envelope"><span class="fw-normal">ayulia1030@email.com</span></i>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved.</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="main.js"></script>
    
</body>

</html>