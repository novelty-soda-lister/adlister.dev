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
                $image_url = __DIR__ . '/../public/img/uploads/' . hash_file('md5', $_FILES[$fileToUpload]['tmp_name']) . '.' . $image_ext;
                var_dump($tempFile, $image_url);
                $r = move_uploaded_file($tempFile, $image_url);
                var_dump($r);
                return $image_url;
        }

    }
    return null;
}
