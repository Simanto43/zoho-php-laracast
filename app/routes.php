<?php


$router->get('','PagesController@home');
$router->get('home','PagesController@home');
$router->get('leads','PagesController@leads');
$router->get('account','PagesController@account');
$router->get('contact','PagesController@contact');

$router->get('users', 'UsersController@index');
//$router->post('users', 'UsersController@store');


//For zoho client authentication

$router->get('auth','ZohoAuthController@auth');

