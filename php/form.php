<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

$nameErrVisibility = $lastNameErrVisibility = $emailErrVisibility = $countryErrVisibility = $emailErrVisibility = $messageErrVisibility = "hidden";
$nameErr = $lastNameErr = $emailErr = $countryErr = $emailErr = $messageErr = "";
$firstName = $lastName = $email = $country = $email = $message = "";

if (isset($_GET["submit"]))
{
    if (isset($_GET["website"]) && $_GET["website"] != "")
    {
        echo "<script> console.log('Honey pot') </script>";
        echo "Honey pot";
        return false;
    }

    $isDataOk = true;

    function sanitizeData($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validateData($data, &$errorVisibility, &$error)
    {
        if (strlen($data) < 1)
        {
            $error = "You must fill this section";
            $errorVisibility = "block";
        }
        elseif(strlen($data) > 256)
        {
            $error = "The maximum of characters allowed is 256";
            $errorVisibility = "block";
        }
        elseif (!preg_match("/^[a-zA-Z-' ,.:;0-9]*$/",$data)) 
        {
            $error = "Only letters and white space allowed";
            $errorVisibility = "block";
            $isDataOk = false;
        }
    }

    $firstName = sanitizeData($_GET['firstName']);
    validateData($firstName, $nameErrVisibility, $nameErr);
    echo "<script> console.log('$nameErr') </script>";
    $lastName = sanitizeData($_GET['lastName']);
    validateData($lastName, $lastNameErrVisibility, $lastNameErr);
    $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
    $country = sanitizeData($_GET['country']);
    validateData($country, $countryErrVisibility, $countryErr);
    $gender = $_GET["gender"];
    $subject = $_GET["subject"];
    $message = sanitizeData($_GET['message']);
    validateData($message, $messageErrVisibility, $messageErr);

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '97f5161e32ef42';
    $phpmailer->Password = 'c02388007fe27d';

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $isDataOk) 
    {
        $response = "This is the response to your message";
        $phpmailer->setFrom("justine.leleu.28@gmail.com","Justine");
        $phpmailer->addAddress($email, "$firstName");
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $response;
        $phpmailer->send();
    } 
    else 
    {
        $emailErrVisibility = "block";
    }
}

?>

<form action="get" class="pt-12 mx-12 font-bellotaR text-xs w-full">
    <div class="grid grid-cols-2 gap-12">

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your first name">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" value="<?php echo $firstName;?>" class="focus:outline-none"/>
            <span class="error text-red-600 <?php echo $nameErrVisibility;?>"><?php echo $nameErr;?></span>
        </div>

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your last name"> 
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" minlength="1" maxlength="256" value="<?php echo $lastName;?>" required class="focus:outline-none"/>
            <span class="error text-red-600 <?php echo $lastNameErrVisibility;?>"><?php echo $lastNameErr;?></span>
        </div>

    </div>

    <div class="grid grid-cols-2 gap-12 mt-12">

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" minlength="1" maxlength="256" value="<?php echo $email;?>" required class="focus:outline-none"/>
            <span class="error text-red-600 <?php echo $emailErrVisibility;?>"><?php echo $emailErr;?></span>
        </div>

        <div class="border-b border-gray flex flex-col gap-2 pb-2" aria-description="Give your country">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" minlength="1" maxlength="256" value="<?php echo $country;?>" required class="focus:outline-none"/>
            <span class="error text-red-600 <?php echo $countryErrVisibility;?>"><?php echo $countryErr;?></span>
        </div>

    </div>

    <div class="grid grid-cols-2 gap-12 mt-12">

        <div class="flex flex-col gap-4" aria-description="Choose your gender">
            <label for="gender">Gender</label>

            <div class="flex items-center gap-2">
                <input type="radio" id="gender1" name="gender" value="male" required class="accent-blueGreen"/>
                <label for="gender1">M</label>

                <input type="radio" id="gender2" name="gender" value="female" required class="ml-4 accent-blueGreen"/>
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

    <input id="website" name="website" type="text" value="" class="hidden"/>

    <div class="border-b border-gray flex flex-col gap-2 pb-1 mt-12" aria-description="Write your message">
        <label for="message">Message</label>
        <div class="flex justify-between pr-3">
            <div class="w-full">
                <textarea name="message" id="message" placeholder="Write your message..." minlength="1" maxlength="256" required class="w-full focus:outline-none"><?php echo $message;?></textarea>
                <span class="error text-red-600 <?php echo $messageErrVisibility;?>"><?php echo $messageErr;?></span>
            </div>
            <button type="submit" name="submit" class="bg-black hover:bg-blueGreen text-white p-3 px-8 rounded whitespace-nowrap">Send Message</button>
        </div>
    </div>
</form>