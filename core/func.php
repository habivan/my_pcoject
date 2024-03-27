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