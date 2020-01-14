<?php

namespace App\Controllers;

use App\core\Request;
use zcrmsdk\crm\crud\ZCRMModule;
use zcrmsdk\crm\crud\ZCRMRecord;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;

class PagesController
{
    public function route()
    {
        $uri = (explode('/',Request::uri()));

       switch (count($uri)){
           case 1:
               $this->display($uri[0]);
               break;
           case 2:
               $this->single($uri[0], $uri[1]);
               break;
           case 3:
               $this->upsert($uri[0], $uri[1]);
               break;
           default:
               echo "opps!";
       }
    }
    public function home()
    {

        return view('index');

    }

    public function single($modulmeName, $id)
    {
        $apiResponse=ZCRMModule::getInstance($modulmeName)->getRecord($id);
        $record = $apiResponse->getData();
        return view('single', compact('record'));
    }

    public function upsert($modulmeName, $id )
    {
        $apiResponse=ZCRMModule::getInstance($modulmeName)->getRecord($id);
//        $record = $apiResponse->getData();
        die(var_dump($apiResponse));
        return view('upsert', compact('record'));

    }

    public function display($modulmeName)
    {
        $moduleName = ucfirst($modulmeName);
        $moduleIns = ZCRMModule::getInstance($modulmeName);
        $apiResponse = $moduleIns->getAllFields();
        $bulkAPIResponse = $moduleIns->getRecords();
        $fields = $apiResponse->getData();
        $recordsArray = $bulkAPIResponse->getData();
        $fieldName = array();
        return view('display', compact('fields','recordsArray', 'fieldName', 'moduleName'));
    }
}
