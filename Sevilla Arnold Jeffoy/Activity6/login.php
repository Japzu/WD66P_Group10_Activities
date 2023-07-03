<?php

$default_email = "admin@gmail.com";
$default_password = "pass123";

$data = file_get_contents("php://input");
$data = json_decode($data);

$email = $data->email;
$password = $data->password;



if (empty($email) && empty($password)) {

    http_response_code(422); 

    echo json_encode(['email' => 'Email and password field is required']);

    exit;

}else if($email == $default_email && $password == $default_password){

    http_response_code(200); 

    echo json_encode(['email' => 'Email Match']);
    echo json_encode(['password' => 'Password Match']);

    exit; 

}else{

    http_response_code(422); 

    echo json_encode(['email' => 'Email does not match']);
    echo json_encode(['password' => 'Password does not match']);

    exit; 
}
/*
if (isset($_POST['email']) && isset($_POST['password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $emailadd = validate($_POST['email']);
    $pass = validate($_POST['password']);


    if(empty($emailadd) && empty($pass)){
        header("Location: index.php?error=Email Address and Password is required");
        exit();
    }else if(empty($emailadd)){
        header("Location: index.php?error=Email Address is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        header("Location: index.php?sucess=Successfully Login");
        exit();;
    }

}else{
    header("Location: index.php");
    exit();
}
*/
?>