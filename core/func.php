<?php 

function dump($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dump_r($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function dd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

function redirect($url = ''){
    if($url){
        $redirect = $url;
    }else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die;
}

function check($url = '/'){
    if(!$_SESSION['user']){
        redirect($url);
    }
}