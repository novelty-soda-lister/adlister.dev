<?php
require_once 'Input.php';
require_once '../models/Model.php';
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

// takes image from form submission and moves it into the uploads directory
// function saveUploadedImage($fileToUpload)
// {

//     $valid = true;

//     // checks if $input_name is in the files super global
//     if(isset($_FILES[$fileToUpload]) && $_FILES[$fileToUpload]['name'])
//     {

//         // checks if there are any errors on the upload from the submission
//         if(!$_FILES[$fileToUpload]['error'])
//         {

//             $tempFile = $_FILES[$fileToUpload]['tmp_name'];
//                 $image_ext = pathinfo($_FILES[$fileToUpload]['name'], PATHINFO_EXTENSION);
//                 $image_url = __DIR__ . '/../public/img/uploads' . $tempFile . '.' . $image_ext;
//                 $r = move_uploaded_file($tempFile, $image_url);
//                 return $image_url;
                
//         }

//     }
//     return null;
// }
// function saveUploadedImage($input_name)
// {
//     $valid = true;
//     // checks if $input_name is in the files super global
//     if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
//     {
//         // checks if there are any errors on the upload from the submission
//         if(!$_FILES[$input_name]['error'])
//         {
//             $tempFile = $_FILES[$input_name]['tmp_name'];
//             $newName = substr($tempFile, 4);
//             $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
//             // Validate Size and Extension
//             if( $_FILES[$input_name]['size'] > (1024000000))
//             {
//                 $valid = false;
//             }
//             // only allows certain file extensions
//             if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
//             {
//                 $valid  = false;
//             }
//             // If Image file makes it to this point, send file to this directory
//             if($valid)
//             {
//                 $image_url = '/img/uploads' . $newName . '.' . $extension;
//                 move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
//                 return $image_url;
//             }
//             else
//             {
//                 return null;
//             }
//         }
//     } else {
//         return null;
//     }
// }
function processSignin(){
    $user = new User;
    $user->name = Input::get('name');
    $user->email = Input::get('email');
    $user->username = Input::get('username'); 
    $user->password = Input::get('password');
    $user->save();
}

//info submitted through Login form
function loginIfNotEmpty(){

    if (Auth::check()) {
        header('Location: /account');
        die();
    } else if(!empty($_POST) && (Auth::attempt(Input::get('username'), Input::get('password')))){
        header('Location: /account');//redirect to user home page
        exit();
    } else if (!empty($_POST)) {
            $_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect, please try again';
    }
    
}

function Logout(){
    Auth::logout();
    header('Location: /sodas');//where to redirect after loguout?

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
        $drinks->user_id = Auth::id();
        $drinks->save();
    }
}

function getAllDrinksForPage() {
    $drinks = Drinks::pagination();
    return $drinks;
}

function getFeaturedDrinks() {
    $featured = Drinks::featured();
    return $featured;
}

function checkLogIn(){
    
     if (!Auth::check()) {
        header('Location: /login');
        die();
    } 
}

function getAccount() {
    $users = User::findByUsernameOrEmail($username);
    return $users;
}





