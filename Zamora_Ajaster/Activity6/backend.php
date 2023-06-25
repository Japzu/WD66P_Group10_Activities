<?php
    function checkPasswordsMatch($password, $confirmPassword) {

        if ($password === $confirmPassword) {
            return true;
        } else {
            return false;
        }
    }

    if (isset($_POST['submit'])) {

        $firstname = strtolower($_POST['firstname']);
        $lastname = strtolower($_POST['lastname']);
        $fullname = ucwords("$firstname $lastname");
        $birthday = $_POST['birthday'];
        $address = strtolower($_POST['address']);
        $city = strtolower($_POST['city']);
        $province = strtolower($_POST['province']);
        $fullAddress = ucwords("$address $city, $province");
        $zip = $_POST['zip'];
        $username = strtolower($_POST['username']);
        $password = $_POST['passOne'];
        $confirmPassword = $_POST['passTwo'];

        if (checkPasswordsMatch($password, $confirmPassword)) {
            echo "Hi $fullname";
            echo "<br>";
            echo "Welcome to My System";
            echo "<br>";
            echo "Your birthday is $birthday";
            echo "<br>";
            echo "You are currently residing at $fullAddress";
            echo "<br>";
            echo "Your email is $username";
            echo "<br>";
            if (isset($_POST['newsletter'])) {
                echo "Thanks for subscribing to our latest news";
            }else{
                echo "";
            };
            echo "<br>";
            echo "<br>";
            echo "Thank you for registering";

        } else {
            echo "You cannot proceed to your account because your password does not match";
        }
    }
?>
