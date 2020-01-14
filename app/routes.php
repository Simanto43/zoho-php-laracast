<?php


$router->get('','PagesController@home');
$router->get('home','PagesController@home');

//For zoho client authentication

$router->get('auth','ZohoAuthController@auth');

