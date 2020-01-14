<?php

use App\core\App;
use zcrmsdk\crm\crud\ZCRMModule;
use zcrmsdk\crm\exception\ZCRMException as ZCRMExceptionAlias;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use zcrmsdk\oauth\exception\ZohoOAuthException;

App::bind('config', require 'config.php');

//App::bind('database', new QueryBuilder(
//    Connection::make(App::get('config')['database'])
//));


try {

//Inatiating  Zoho crm rest client
    ZCRMRestClient::initialize(App::get('config')['zohocrm']);
}catch (ZohoOAuthException  $exception){
    die('Please configure Zoho:  '.$exception->getMessage());
}



function modules(){
    try {
        return ZCRMRestClient::getInstance()->getAllModules()->getData();
    } catch (ZCRMExceptionAlias $exception){
        return [];
    }

}

function view($name, $data = [])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

function crud($name, $data = [])
{
    extract($data);
    return require "app/views/crud/{$name}.view.php";
}