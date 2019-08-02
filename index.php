<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<section id="contactform">
        <div id="contact">
            <h3>Contact Us</h3>
            <div id="errors"></div>
                <form method="post" action="form.php">  <br>
                    <label for="firstname">First name</label>
                        <input type="text" name="firstname" placeholder="Your name.."> <br>  <br>
                    <label for="email">Email</label>
                        <input type="text" name="email" placeholder="email.." value="<?php echo $email;?>"><br><br>
                    <label for="message"></label>
                        <textarea name="message" id="message" cols="30" rows="10" value="<?php echo $message;?>"></textarea> <br><br>
                        <input type="submit" value="Submit">

                        </form>
</div>


</section>



<?php include("form.php"); ?>
</body>
</html>