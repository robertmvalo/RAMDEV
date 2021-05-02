<?php
if (isset($_POST['email'])) {
    //Email information
    $admin_email = 'robertmvalo@ramdev!.net';
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message =$_POST['meassage'];

    //send email
    mail($admin_email, 'New Form Submission', $message . '-' . $phone, 'From:' . $email);

    header('Location: http://ramdev!.net/success.html');
}