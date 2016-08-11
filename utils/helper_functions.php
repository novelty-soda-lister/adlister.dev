<?php
require_once 'Input.php';
// List of helper functions used throughout the application.
// Primarily used within the PageController function.
require_once 'Input.php';

// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($fileToUpload)
{

    $valid = true;

    // checks if $input_name is in the files super global
    if(isset($_FILES[$fileToUpload]) && $_FILES[$fileToUpload]['name'])
    {

        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$fileToUpload]['error'])
        {

            $tempFile = $_FILES[$fileToUpload]['tmp_name'];
                $image_ext = pathinfo($_FILES[$fileToUpload]['name'], PATHINFO_EXTENSION);
                $image_url = __DIR__ . '/../public/img/uploads/' . hash_file('md5', $_FILES[$fileToUpload]['tmp_name']) . '.' . $image_ext;
                var_dump($tempFile, $image_url);
                $r = move_uploaded_file($tempFile, $image_url);
                var_dump($r);
                return $image_url;
        }

    }
    return null;
}
function processSignin(){
    $user = new User;
    $user->name = Input::get('name');
    $user->email = Input::get('email');
    $user->username = Input::get('username'); 
    $user->password = Input::get('password');
    $user->save();
    // if(Auth::attempt(Input::get('username'), Input::get('password'))){
    //     header('Location: ');
    //     die();
    // } else{
    //     $_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect, please try again';
    //     header('Location: ');
    //     die();
    // }
}
//info submitted through Login form
function loginIfNotEmpty(){
    if($_POST){
        if(Auth::attempt(Input::get('username'), Input::get('password'))){
            header('Location: ../views/home.php');//redirect to user home page
            exit();
        }
    }
}

function Logout(){
    Auth::logout();
    header('Location: ../views/home.php');//where to redirect after loguout?
    exit();
}



















