<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackers Poulette</title>
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/hackers-poulette-logo-white.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>
<body class="bg-lightGray">

    <header class="flex justify-between items-center px-10">
        <img src="../assets/images/hackers-poulette-logo.png" alt="Hackers Poulette logo" class="w-[150px]">
        <nav role="navigation">
            <ul class="flex gap-10 font-bellotaR text-lightBlack text-base">
                <li><a href="">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="flex flex-col items-center my-10" aria-description="Contact Us - Any question or remarks? Just write us a message!">
        <h1 class="font-bellotaB text-lightBlack text-[40px]">Contact Us</h1>
        <p class="font-bellotaR text-lightBlack text-lg">Any question or remarks? Just write us a message!</p>
    </section>

    <div class="bg-white rounded-lg w-11/12 mx-auto p-1 flex">
        <section class="bg-black text-white w-1/3 rounded-lg p-8" aria-description="Contact Informations">
            <h2 class="font-bellotaB text-[28px]">Contact Information</h2>
            <div class="flex flex-col gap-5 my-10">
                <div class="flex gap-5 text-base font-bellotaR">
                    <img src="../assets/images/phone-icon.svg" alt="phone icon" class="w-4">
                    <p>+1010 1234 321</p>
                </div>
                <div class="flex gap-5 text-base font-bellotaR">
                    <img src="../assets/images/mail-icon.svg" alt="mail icon" class="w-4">
                    <p>hackersPoulette@gmail.com</p>
                </div>
                <div class="flex gap-5 text-base font-bellotaR">
                    <img src="../assets/images/location-icon.svg" alt="location icon" class="w-4">
                    <p>132 Hackers Street Boston, Massachusetts 02156 United States</p>
                </div>
            </div>
            <div class="flex gap-4 py-4">
                <a href="" class="bg-lightBlack p-2 rounded-full hover:bg-blueGreen"><img src="../assets/images/twitter-icon.svg" alt="twitter icon" class="w-4"></a>
                <a href="" class="bg-lightBlack p-2 rounded-full hover:bg-blueGreen"><img src="../assets/images/instagram-icon.svg" alt="instagram icon" class="w-4"></a>
                <a href="" class="bg-lightBlack p-2 rounded-full hover:bg-blueGreen"><img src="../assets/images/discord-icon.svg" alt="discord icon" class="w-4"></a>
            </div>
        </section>

        <?php
        require 'form.php';
        ?>

    </div>

    <footer class="bg-black mt-10 px-10">
        <div class="border-b border-white w-full"><img src="../assets/images/hackers-poulette-logo-white.png" alt="Hackers Poulette logo" class="w-[180px] mx-auto"></div>
        <div class="font-bellotaR text-white text-base pt-5 pb-10 grid grid-cols-[2fr,1fr,1fr,1fr,2fr]">
            <div class="flex flex-col gap-5">
                <h3 class="font-bellotaB text-lg">Reach us</h3>
                <div class="flex gap-5 text-base font-bellotaR">
                    <img src="../assets/images/phone-icon.svg" alt="phone icon" class="w-4">
                    <p>+1010 1234 321</p>
                </div>
                <div class="flex gap-5 text-base font-bellotaR">
                    <img src="../assets/images/mail-icon.svg" alt="mail icon" class="w-4">
                    <p>hackersPoulette@gmail.com</p>
                </div>
                <div class="flex gap-5 text-base font-bellotaR">
                    <img src="../assets/images/location-icon.svg" alt="location icon" class="w-4">
                    <p>132 Hackers Street Boston, Massachusetts 02156 United States</p>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <h3 class="font-bellotaB text-lg">Company</h3>
                <ul class="flex flex-col gap-5" role="navigation">
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blogs</a></li>
                </ul>
            </div>

            <div class="flex flex-col gap-5">
                <h3 class="font-bellotaB text-lg">Legal</h3>
                <ul class="flex flex-col gap-5" role="navigation">
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Services</a></li>
                    <li><a href="">Terms of Use</a></li>
                    <li><a href="">Refund Policy</a></li>
                </ul>
            </div>

            <div class="flex flex-col gap-5">
                <h3 class="font-bellotaB text-lg">Quick Links</h3>
                <ul class="flex flex-col gap-5" role="navigation">
                    <li><a href="">Shop</a></li>
                    <li><a href="">Downloads</a></li>
                    <li><a href="">Forum</a></li>
                </ul>
            </div>

            <div class="flex flex-col gap-5 bg-lightBlack rounded-lg p-4 h-fit w-fit">
            <h3 class="font-bellotaB text-lg">Join Our Newsletter</h3>
            <form action="" class="flex">
                <input type="text" placeholder="Your email address" class="rounded-l focus:outline-none">
                <button class="bg-black hover:bg-blueGreen p-2 rounded-r">Subscribe</button>
            </form>
            <p class="font-bellotaL">*  Will send you weekly updates for your better tool management.</p>
            </div>
        </div>
    </footer>

</body>
</html>