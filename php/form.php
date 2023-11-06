<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

 if (isset($_GET["submit"]))
 {
    $firstName = filter_var($_GET['firstName'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_var($_GET['lastName'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
    $country = filter_var($_GET['country'], FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = isset($_GET["gender"]) ? $_GET["gender"] : "";
    $subject = $_GET["subject"];
    $message = filter_var($_GET['message'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<script> console.log('$firstName') </script>";
    echo "<script> console.log('$lastName') </script>";
    echo "<script> console.log('$email') </script>";
    echo "<script> console.log('$country') </script>";
    echo "<script> console.log('$gender') </script>";
    echo "<script> console.log('$subject') </script>";
    echo "<script> console.log('$message') </script>";

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '97f5161e32ef42';
    $phpmailer->Password = 'c02388007fe27d';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo "This cleaned email address is considered valid.";
        $response = "This is the response to your message";
        $phpmailer->setFrom("justine.leleu.28@gmail.com","Justine");
        $phpmailer->addAddress($email, "$firstName");
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $response;
        $phpmailer->send();
    } 
    else 
    {
        echo "This cleaned email address is not valid. Sorry. xoxo.";
    }
 }

?>

<form action="get" class="pt-12 mx-12 font-bellotaR text-xs w-full">
    <div class="grid grid-cols-2 gap-12">

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your first name">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" maxlength="50" required class="focus:outline-none"/>
        </div>

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your last name"> 
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" maxlength="50" required class="focus:outline-none"/>
        </div>

    </div>

    <div class="grid grid-cols-2 gap-12 mt-12">

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" maxlength="50" required class="focus:outline-none"/>
        </div>

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your country">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" maxlength="50" required class="focus:outline-none"/>
        </div>

    </div>

    <div class="grid grid-cols-2 gap-12 mt-12">

        <div class="flex flex-col gap-4" aria-description="Choose your gender">
            <label for="gender">Gender</label>

            <div class="flex items-center gap-2">
                <input type="radio" id="gender1" name="gender" value="male" class="accent-blueGreen"/>
                <label for="gender1">M</label>

                <input type="radio" id="gender2" name="gender" value="female" class="ml-4 accent-blueGreen"/>
                <label for="gender2">F</label>
            </div>
        </div>

        <div class="flex flex-col gap-4" aria-description="Choose the subject between other, delivery problems or product problem">
            <label for="subject">Select Subject</label>

            <div class="flex items-center gap-2">
                <input type="radio" id="subject1" name="subject" value="Other" checked class="accent-blueGreen"/>
                <label for="subject1">Other</label>

                <input type="radio" id="subject2" name="subject" value="Delivery problem" class="ml-4 accent-blueGreen"/>
                <label for="subject2">Delivery problem</label>

                <input type="radio" id="subject3" name="subject" value="Product problem" class="ml-4 accent-blueGreen"/>
                <label for="subject3">Product problem</label>
            </div>
        </div>

    </div>

    <div class="border-b border-gray flex flex-col gap-2 pb-1 mt-12" aria-description="Write your message">
        <label for="message">Message</label>
        <div class="flex justify-between pr-3">
            <input type="text" name="message" id="message" placeholder="Write your message..." maxlength="255" required class="w-full focus:outline-none"/>
            <button type="submit" name="submit" class="bg-black hover:bg-blueGreen text-white p-3 px-8 rounded whitespace-nowrap">Send Message</button>
        </div>
    </div>
</form>