<?php


namespace App\Controllers;


use App\core\App;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use zcrmsdk\oauth\exception\ZohoOAuthException;
use zcrmsdk\oauth\ZohoOAuth;

class ZohoAuthController
{
    public function auth()
    {

        if (isset($_GET['code'])){
            ZCRMRestClient::initialize(App::get('config')['zohocrm']);
            // Assign the email id access
            $_SERVER['user_email_id'] = App::get('config')['zohocrm']['currentUserEmail'];
            // empty the authtokens file
            $authTokenFile = App::get('config')['zohocrm']['token_persistence_path']. "zcrm_oauthtokens.txt";
            $fp = fopen($authTokenFile, 'w');
            fwrite($fp, '');
            fclose($fp);
            //Generating access tokens
            try {
                $oAuthClient = ZohoOAuth::getClientInstance();
                $grantToken = $_GET['code'];
                $oAuthTokens = $oAuthClient->generateAccessToken($grantToken);
                echo 'Token generated and app authorised successfully.';
            } catch (ZohoOAuthException $e) {
                echo "token did not generated:\n" . $e ;
            }
        } else {
            $conf = App::get('config')['zohocrm'];
            $redirect_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            echo "<a href='https://accounts.zoho.com/signin?servicename=AaaServer&serviceurl=%2Fdeveloperconsole' target='_blank'>Create App</a><br>\n";
            echo "redirect url : <code>{$redirect_link}</code> <br><br><br> \n";
            if (($conf['client_id'] == '') || ($conf['client_secret'] == '') || ($conf['redirect_uri'] == '')){
                echo "Please fill the credentials in config.php file.<br>\n";
                echo "<a target='_self' href='{$redirect_link}'>Recheck</a>";
            }else{
                $zcid = $conf['client_id'];
                echo "<a href='https://accounts.zoho.com/oauth/v2/auth?scope=ZohoCRM.modules.ALL,ZohoCRM.settings.ALL,aaaserver.profile.READ&client_id=$zcid&response_type=code&access_type=offline&prompt=consent&redirect_uri=$redirect_link' target='_self'>Click here to Authorize</a>";
            }
        }
    }
}