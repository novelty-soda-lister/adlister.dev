<?php
require_once 'Input.php';
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

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
                $image_url = __DIR__ . '/../public/img/uploads' . $tempFile . '.' . $image_ext;
                $r = move_uploaded_file($tempFile, $image_url);
                var_dump($_FILES);
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

function processUserUpload(){
    $image_url = saveUploadedImage('fileToUpload');
    if ($image_url) {
        $drinks = new Drinks;
        $drinks->name = Input::get('name');
        $drinks->price = Input::get('price');
        $drinks->description = Input::get('description'); 
        $drinks->image_url = pathinfo($image_url, PATHINFO_BASENAME);
        $drinks->save();
    }
}

function getAllDrinksForPage() {
    $drinks = Drinks::pagination();
    return $drinks;
}

