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
    <link rel="stylesheet" href="./css/register.style.css" />
    <title>Register</title>
</head>

<body>
    <div class="register-container">
        <div class="register-overlay">
            <div class="register-content">
                <img src="./img/logo-light.png" style="max-width: 300px;" alt="">

                <h1 class="poppins-semibold">Moving You Forward</h1>
                <p class="poppins-regular">Experience a hassle-free moving process that propels you into your new
                    beginning with confidence and ease</p>
            </div>
            <div class="register-box">
                <div>
                    <p class="poppins-regular">LET'S GET YOU STARTED!</p>
                    <h1 class="poppins-regular">Create an Account</h1>
                    <form action="process-register.php" method="post">
                        <label for="name" class="poppins-regular">Name: </label>
                        <input type="name" placeholder="Your Name" name="name">
                        <label for="email" class="poppins-regular">Email: </label>
                        <input type="email" placeholder="Email Address" name="email">
                        <label for="password" class="poppins-regular">Password: </label>
                        <input type="password" placeholder="Password" name="password">
                        <button class="poppins-regular" id="register" name="register">CONTINUE</button>
                        <section>
                            <p class="poppins-regular" style="text-align: center; margin: 0 !important;">Already have an Account?</p>
                            <a href="/login.php" class="poppins-regular" style="text-decoration: underline;">Login</a>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>