<?php

if($_POST['password'] === $_POST['confirm']){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];

    echo "Hi " . ucwords($firstname) . " " . ucwords($lastname);
    echo "<br />";
    echo "Welcome to My System";
    echo "<br />";
    echo "Your birthdate is " . $birthday;
    echo "<br />";
    echo "You are currently residing at " . ucwords($address) . " " . ucwords($city) . " " . ucwords($province) . " " . $zip;
    echo "<br />";
    echo "Your email is " . strtolower($email);
    if(isset($_POST['subs'])){
        echo "<br />";
        echo "Thanks for subscribing to our latest news";
        echo "<br />";
    }else{
        echo "<br />";
    }
    echo "<br />";
    echo "Thank you for registering";
}else{
    echo "You cannot proceed to your account because your password does not match";
}


?>