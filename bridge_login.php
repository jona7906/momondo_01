<?php
require_once __DIR__.'/_x.php';
require_once __DIR__.'/api_login.php';


_validate_email();




if($_POST['email']!==$userTwo['user_email'] && $_POST['email']!==$userOne['user_email']){
    http_response_code(400);
    echo 'No user with that email';
}

// Success


if($_POST['email']==$userOne['user_email']){ 
    http_response_code(200);
    session_start();
    $_SESSION['user_name'] = $userOne['user_name'];
    echo json_encode($userOne);
}

if($_POST['email']==$userTwo['user_email']){
    http_response_code(200);
    session_start();
    $_SESSION['user_name'] = $userTwo['user_name'];
    echo json_encode($userTwo);
}




