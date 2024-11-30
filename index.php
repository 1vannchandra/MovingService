<?php

include "conn.php";

function setUsernameCookie($cookie_set, $name)
{
    $name_json = json_encode($name);

    if (!isset($_COOKIE[$cookie_set])) {
        setcookie($cookie_set, $name_json, time() + (86400 * 30), "/");
    }
}

$cookie_set = "username";
$name = ["Ivan", "Chandra"];
echo setUsernameCookie($cookie_set, $name);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/index.style.css" />
    <title>Furnyetur</title>
</head>

<body style="overflow-x: hidden;">

    <header>
        <a href="">
            <img src="img/logo.png" alt="Furnyetur Logo">
        </a>

        <div>
            <a href="/login.php">
                <div class="btn-login poppins-regular">Login</div>
            </a>
            <div class="side-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <span class="poppins-semibold">Premium Service</span>
            <h1 class="poppins-bold">Discover the Easiest Way to Move Your Home</h1>
            <h5 class="poppins-regular">Efficient and Reliable Moving Services for Every Need</h5>
            <div class="hero-content-button">
                <a href="">
                    <div class="poppins-regular">Get Started</div>
                </a>
                <a href="/dashboard.php">
                    <div class="poppins-regular">Dashboard</div>
                </a>
            </div>
        </div>
        <div class="hero-img"></div>
    </section>

    <section class="services">
        <div class="service-item">
            <h1 class="poppins-bold">Make Your Move Simple</h1>
            <p class="poppins-regular">Explore Our Professional Moving Services, Sign Up Now and Experience a
                Hassle-Free Move. Contact Us for Tailored Moving Solutions to Fit Your Needs.</p>
            <div>
                <a href="">
                    <div class="poppins-regular">
                        <span>Get Started</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a href="">
                    <div class="poppins-regular">
                        <span>Contact Us</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="service-item">
            <div class="icon"></div>
            <h1 class="poppins-semibold">Fast Moving</h1>
            <p class="poppins-regular">Get Your Belongings Moved Quickly and On Time.</p>
            <div>
                <a href="">
                    <div class="poppins-regular">
                        <span>Price Detail</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="service-item">
            <div class="icon"></div>
            <h1 class="poppins-semibold">24/7 Support</h1>
            <p class="poppins-regular">Contact Our Support Team for Immediate Assistance.</p>
            <div>
                <a href="">
                    <div class="poppins-regular">
                        <span>Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-img"></div>
        <div class="cta-content">
            <span class="poppins-semibold">LIMITED OPPORTUNITY</span>
            <h1 class="poppins-bold">Start Moving</h1>
            <p class="poppins-regular">Start Your Journey to a Smooth and Stress-Free Move with Our Professional Moving
                Services. Discover Reliable Solutions Designed to Make Your Move Easier.</p>
            <div>
                <a href="">
                    <div class="poppins-regular">
                        Get Started
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="customer">
        <h1 class="poppins-bold">What Our Customer Are Saying</h1>
        <div class="customer-grid">
            <div>
                <h1 class="poppins-semibold">Amazing and Stress-Free Service!</h1>
                <p class="poppins-regular">
                    This moving service is absolutely amazing! The team was professional and made sure all my belongings
                    were moved safely. The process was quick and stress-free. I would definitely recommend them!
                </p>

                <div class="user-avatar">
                    <div class="avatar-1"></div>
                    <div>
                        <h6 class="poppins-semibold">Sari</h6>
                        <p class="poppins-regular">Jakarta</p>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="poppins-semibold">Smooth and Easy Moving Experience!</h1>
                <p class="poppins-regular">
                    I never thought moving could be this easy. Their team arrived on time, worked efficiently, and was
                    very friendly. Moving to my new home became an enjoyable experience.
                </p>

                <div class="user-avatar">
                    <div class="avatar-2"></div>
                    <div>
                        <h6 class="poppins-semibold">Budi</h6>
                        <p class="poppins-regular">Surabaya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <h1 class="poppins-bold">FAQ</h1>
        <div class="accordion">
            <details>
                <summary class="poppins-semibold">How far in advance should I book your moving service?</summary>
                <div class="content poppins-regular">
                    We recommend booking at least 2-4 weeks in advance to ensure availability on your preferred date.
                    However, we do our best to accommodate last-minute requests whenever possible.
                </div>
            </details>
            <details>
                <summary class="poppins-semibold">Do you offer packing services as well?</summary>
                <div class="content poppins-regular">
                    Yes, we offer professional packing services to ensure your belongings are safely prepared for the
                    move.
                </div>
            </details>
            <details>
                <summary class="poppins-semibold">How much will my move cost?</summary>
                <div class="content poppins-regular">
                    The cost of your move depends on several factors, including the distance, size of your move, and any
                    additional services required.
                </div>
            </details>
            <details>
                <summary class="poppins-semibold">Are my belongings insured during the move?</summary>
                <div class="content poppins-regular">
                    Yes, we offer insurance options to protect your belongings during transit.
                </div>
            </details>
            <details>
                <summary class="poppins-semibold">What areas do you serve?</summary>
                <div class="content poppins-regular">
                    We serve a wide range of areas, including both local and long-distance moves. Please contact us to
                    check if we cover your location.
                </div>
            </details>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-links">
            <a href="#" class="poppins-regular">About</a>
            <a href="#" class="poppins-regular">Blog</a>
            <a href="#" class="poppins-regular">Jobs</a>
            <a href="#" class="poppins-regular">Press</a>
            <a href="#" class="poppins-regular">Accessibility</a>
            <a href="#" class="poppins-regular">Partners</a>
        </div>

        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>

        <div class="footer-bottom poppins-regular">
            &copy; 2024 Furnyetur, Inc. All rights reserved
        </div>
    </footer>

    <div id="toast" class="toast hidden poppins-regular">
        <?php
        echo $_COOKIE[$cookie_set];
        ?>
    </div>

    <script src="js/index.js"></script>
</body>

</html>