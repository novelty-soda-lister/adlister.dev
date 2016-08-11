
<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // $data['main_view'] = $main_view;

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {

        case '/':
            $main_view = '../views/home.php';
            $data['drinks'] = getAllDrinksForPage();
            break;
        case '/sodas':
            $main_view = '../views/ads/index.php';
            break;
        case '/create':

            $main_view = '../views/ads/create.php';
            if ($_POST) 
            {
                processUserUpload();
            }
            break;
        case '/login':
            $main_view = '../views/users/login.php';
            break;
        case '/signup':
            $main_view = '../views/users/signup.php';
            if ($_POST) {
                processSignIn();
            }
            break;
        case '/logout':
            session_start();
            session_unset();
            session_destroy();
            echo "<script>alert('You have been logged out')</script>";
            $main_view = '../views/home.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }



    $data['title'] = 'Soda Lister';
    $data['main_view'] = $main_view;
    $data['request'] = $request;
    
    return $data;
}

extract(pageController());