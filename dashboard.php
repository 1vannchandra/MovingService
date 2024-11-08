<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="./css/dashboard.style.css" />
    <title>Dashboard</title>
</head>

<body>
    <nav class="sidenav">
        <a href="">
            <img src="img/logo.png" alt="">
        </a>
        <div>
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <p class="poppins-semibold">Service</p>
        </div>
    </nav>
    <section class="dashboard">
        <div class="dashboard-header">
            <h1 class="poppins-semibold">Service</h1>
        </div>
        <div class="dashboard-content">
            <div class="dashboard-top">
                <div class="dashboard-top-item">
                    <img src="/img/insurance.png" style="max-width: 60px; max-height: 60px;" alt="">
                    <div>
                        <h1 class="poppins-semibold" style="font-size: 20px;">Package Insurance</h1>
                        <p class="poppins-regular" style="color: #718EBF; margin-top: 10px;">Unlimited protection</p>
                    </div>
                </div>
                <div class="dashboard-top-item">
                    <img src="/img/rent.png" style="max-width: 60px; max-height: 60px;" alt="">
                    <div>
                        <h1 class="poppins-semibold" style="font-size: 20px;">Rent</h1>
                        <p class="poppins-regular" style="color: #718EBF; margin-top: 10px;">Rent. Think. Grow</p>
                    </div>
                </div>
                <div class="dashboard-top-item">
                    <img src="/img/safety.png" style="max-width: 60px; max-height: 60px;" alt="">
                    <div>
                        <h1 class="poppins-semibold" style="font-size: 20px;">Safety</h1>
                        <p class="poppins-regular" style="color: #718EBF; margin-top: 10px;">We are your allies</p>
                    </div>
                </div>
            </div>
            <div class="dashboard-bottom">
                <div class="services-container poppins-semibold">
                    <h1 class="services-title">Services List</h1>
                    <div class="service-card">
                        <div class="service-icon service-icon-pink">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Service</div>
                            <div class="service-value">Home Moving Service</div>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Date/Time</div>
                            <div class="service-value-gray">2024-09-30<br>08:00 AM</div>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Location</div>
                            <div class="service-value">Surabaya</div>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Status</div>
                            <div class="service-value-gray">Scheduled</div>
                        </div>
                        <div>
                            <button class="service-button">View Details</button>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-icon service-icon-yellow">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Service</div>
                            <div class="service-value">Service Name...</div>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Date/Time</div>
                            <div class="service-value-gray">Date<br>Time</div>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Location</div>
                            <div class="service-value">Earth</div>
                        </div>
                        <div class="service-content">
                            <div class="service-label">Status</div>
                            <div class="service-value-gray">In Progress</div>
                        </div>
                        <div>
                            <button class="service-button">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-box">
            <h2 class="poppins-semibold">Selamat Datang <span id="user"></span></h2>
            <p class="poppins-regular">Selamat datang di dashboard</p>
            <button id="closePopup" class="poppins-regular">Tutup</button>
        </div>
    </div>

    <script src="js/dashboard.js"></script>
</body>

</html>