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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/login.style.css" />
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <div class="login-overlay">
            <div class="login-content">
                <img src="./img/logo-light.png" style="max-width: 300px;" alt="">

                <h1 class="poppins-semibold">Moving You Forward</h1>
                <p class="poppins-regular">Experience a hassle-free moving process that propels you into your new
                    beginning with confidence and ease</p>
            </div>
            <div class="login-box">
                <div>
                    <p class="poppins-regular">WELCOME BACK!</p>
                    <h1 class="poppins-regular">Log In To Your Account</h1>
                    <form id="loginForm" action="process-login.php" method="post">
                        <label for="email" class="poppins-regular">Email: </label>
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                        
                        <label for="password" class="poppins-regular">Password: </label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        
                        <div>
                            <section>
                                <input type="checkbox" name="" id="">
                                <label for="checkbox" class="poppins-regular">Remember Me</label>
                            </section>
                            <a href="" class="poppins-regular" style="color: black !important;">Forgot password?</a>
                        </div>

                        <button type="submit" class="poppins-regular" id="login" name="login">CONTINUE</button>

                        <p class="poppins-regular" style="text-align: center;margin-top: 20px;">OR</p>
                        <a href="">
                            <div class="third-party">
                                <i class="fa-brands fa-google"></i>
                                <span class="poppins-regular">Log In With Google</span>
                            </div>
                        </a>
                        <a href="">
                            <div class="third-party">
                                <i class="fa-brands fa-facebook"></i>
                                <span class="poppins-regular">Log In With Facebook</span>
                            </div>
                        </a>
                        <a href="">
                            <div class="third-party google">
                                <i class="fa-brands fa-apple"></i>
                                <span class="poppins-regular">Log In With Apple</span>
                            </div>
                        </a>
                        <section>
                            <p class="poppins-regular" style="text-align: center; margin: 0 !important;">Don't have an account?</p>
                            <a href="/register.php" class="poppins-regular" style="text-decoration: underline;">Sign Up</a>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/login.js"></script>
</body>

</html>
