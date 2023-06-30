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
}
// }else{

//     http_response_code(422); 

//     echo json_encode(['email' => 'Email does not match']);
//     echo json_encode(['password' => 'Password does not match']);

//     exit; 
// }
?>