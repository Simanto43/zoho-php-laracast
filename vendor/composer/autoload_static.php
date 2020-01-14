<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77204a26215a26ca84e02dd21dae89f9
{
    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zcrmsdk\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zcrmsdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/zohocrm/php-sdk/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UrlController' => __DIR__ . '/../..' . '/app/controllers/UrlController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Controllers\\ZohoAuthController' => __DIR__ . '/../..' . '/app/controllers/ZohoAuthController.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit77204a26215a26ca84e02dd21dae89f9' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit77204a26215a26ca84e02dd21dae89f9' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Module' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/module.php',
        'Org' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/organization.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Record' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/record.php',
        'RestC' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/rest.php',
        'RestClient' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/bulkapi.php',
        'TAGAPI' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/tagAPI.php',
        'customView' => __DIR__ . '/..' . '/zohocrm/php-sdk/samplecodes/customeview.php',
        'zcrmsdk\\crm\\api\\APIRequest' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/APIRequest.php',
        'zcrmsdk\\crm\\api\\handler\\APIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/APIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\APIHandlerInterface' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/APIHandlerInterface.php',
        'zcrmsdk\\crm\\api\\handler\\EntityAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/EntityAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\MassEntityAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/MassEntityAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\MetaDataAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/MetaDataAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\ModuleAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/ModuleAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\OrganizationAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/OrganizationAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\RelatedListAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/RelatedListAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\TagAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/TagAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\VariableAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/VariableAPIHandler.php',
        'zcrmsdk\\crm\\api\\handler\\VariableGroupAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/handler/VariableGroupAPIHandler.php',
        'zcrmsdk\\crm\\api\\response\\APIResponse' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/response/APIResponse.php',
        'zcrmsdk\\crm\\api\\response\\BulkAPIResponse' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/response/BulkAPIResponse.php',
        'zcrmsdk\\crm\\api\\response\\CommonAPIResponse' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/response/CommonAPIResponse.php',
        'zcrmsdk\\crm\\api\\response\\EntityResponse' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/response/EntityResponse.php',
        'zcrmsdk\\crm\\api\\response\\FileAPIResponse' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/response/FileAPIResponse.php',
        'zcrmsdk\\crm\\api\\response\\ResponseInfo' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/api/response/ResponseInfo.php',
        'zcrmsdk\\crm\\bulkapi\\handler\\BulkAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkapi/handler/BulkAPIHandler.php',
        'zcrmsdk\\crm\\bulkapi\\handler\\BulkReadAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkapi/handler/BulkReadAPIHandler.php',
        'zcrmsdk\\crm\\bulkapi\\handler\\BulkWriteAPIHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkapi/handler/BulkWriteAPIHandler.php',
        'zcrmsdk\\crm\\bulkapi\\response\\BulkResponse' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkapi/response/BulkResponse.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkCallBack' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkCallBack.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkCriteria' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkCriteria.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkQuery' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkQuery.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkRead' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkRead.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkResult' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkResult.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWrite' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWrite.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWriteFieldMapping' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWriteFieldMapping.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWriteFileStatus' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWriteFileStatus.php',
        'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWriteResource' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWriteResource.php',
        'zcrmsdk\\crm\\crud\\ZCRMAttachment' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMAttachment.php',
        'zcrmsdk\\crm\\crud\\ZCRMCustomView' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMCustomView.php',
        'zcrmsdk\\crm\\crud\\ZCRMCustomViewCategory' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMCustomViewCategory.php',
        'zcrmsdk\\crm\\crud\\ZCRMCustomViewCriteria' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMCustomViewCriteria.php',
        'zcrmsdk\\crm\\crud\\ZCRMEventParticipant' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMEventParticipant.php',
        'zcrmsdk\\crm\\crud\\ZCRMField' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMField.php',
        'zcrmsdk\\crm\\crud\\ZCRMInventoryLineItem' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMInventoryLineItem.php',
        'zcrmsdk\\crm\\crud\\ZCRMJunctionRecord' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMJunctionRecord.php',
        'zcrmsdk\\crm\\crud\\ZCRMLayout' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMLayout.php',
        'zcrmsdk\\crm\\crud\\ZCRMLeadConvertMapping' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMLeadConvertMapping.php',
        'zcrmsdk\\crm\\crud\\ZCRMLeadConvertMappingField' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMLeadConvertMappingField.php',
        'zcrmsdk\\crm\\crud\\ZCRMLookupField' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMLookupField.php',
        'zcrmsdk\\crm\\crud\\ZCRMModule' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMModule.php',
        'zcrmsdk\\crm\\crud\\ZCRMModuleRelatedList' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMModuleRelatedList.php',
        'zcrmsdk\\crm\\crud\\ZCRMModuleRelation' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMModuleRelation.php',
        'zcrmsdk\\crm\\crud\\ZCRMNote' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMNote.php',
        'zcrmsdk\\crm\\crud\\ZCRMOrgTax' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMOrgTax.php',
        'zcrmsdk\\crm\\crud\\ZCRMPermission' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMPermission.php',
        'zcrmsdk\\crm\\crud\\ZCRMPickListValue' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMPickListValue.php',
        'zcrmsdk\\crm\\crud\\ZCRMPriceBookPricing' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMPriceBookPricing.php',
        'zcrmsdk\\crm\\crud\\ZCRMProfileCategory' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMProfileCategory.php',
        'zcrmsdk\\crm\\crud\\ZCRMProfileSection' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMProfileSection.php',
        'zcrmsdk\\crm\\crud\\ZCRMRecord' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMRecord.php',
        'zcrmsdk\\crm\\crud\\ZCRMRelatedListProperties' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMRelatedListProperties.php',
        'zcrmsdk\\crm\\crud\\ZCRMSection' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMSection.php',
        'zcrmsdk\\crm\\crud\\ZCRMTag' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMTag.php',
        'zcrmsdk\\crm\\crud\\ZCRMTax' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMTax.php',
        'zcrmsdk\\crm\\crud\\ZCRMTrashRecord' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMTrashRecord.php',
        'zcrmsdk\\crm\\crud\\ZCRMVariable' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMVariable.php',
        'zcrmsdk\\crm\\crud\\ZCRMVariableGroup' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/crud/ZCRMVariableGroup.php',
        'zcrmsdk\\crm\\exception\\APIExceptionHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/exception/APIExceptionHandler.php',
        'zcrmsdk\\crm\\exception\\ZCRMException' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/exception/ZCRMException.php',
        'zcrmsdk\\crm\\setup\\org\\ZCRMOrganization' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/org/ZCRMOrganization.php',
        'zcrmsdk\\crm\\setup\\restclient\\ZCRMRestClient' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/restclient/ZCRMRestClient.php',
        'zcrmsdk\\crm\\setup\\users\\ZCRMProfile' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMProfile.php',
        'zcrmsdk\\crm\\setup\\users\\ZCRMRole' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMRole.php',
        'zcrmsdk\\crm\\setup\\users\\ZCRMUser' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMUser.php',
        'zcrmsdk\\crm\\setup\\users\\ZCRMUserCustomizeInfo' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMUserCustomizeInfo.php',
        'zcrmsdk\\crm\\setup\\users\\ZCRMUserTheme' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMUserTheme.php',
        'zcrmsdk\\crm\\utility\\APIConstants' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/utility/APIConstants.php',
        'zcrmsdk\\crm\\utility\\CommonUtil' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/utility/CommonUtil.php',
        'zcrmsdk\\crm\\utility\\Logger' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/utility/Logger.php',
        'zcrmsdk\\crm\\utility\\ZCRMConfigUtil' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/utility/ZCRMConfigUtil.php',
        'zcrmsdk\\crm\\utility\\ZohoHTTPConnector' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/crm/utility/ZohoHTTPConnector.php',
        'zcrmsdk\\oauth\\ZohoOAuth' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/ZohoOAuth.php',
        'zcrmsdk\\oauth\\ZohoOAuthClient' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/ZohoOAuthClient.php',
        'zcrmsdk\\oauth\\exception\\ZohoOAuthException' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/exception/ZohoOAuthException.php',
        'zcrmsdk\\oauth\\persistence\\ZohoOAuthPersistenceByFile' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/persistence/ZohoOAuthPersistenceByFile.php',
        'zcrmsdk\\oauth\\persistence\\ZohoOAuthPersistenceHandler' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/persistence/ZohoOAuthPersistenceHandler.php',
        'zcrmsdk\\oauth\\persistence\\ZohoOAuthPersistenceInterface' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/persistence/ZohoOAuthPersistenceInterface.php',
        'zcrmsdk\\oauth\\utility\\ZohoOAuthConstants' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthConstants.php',
        'zcrmsdk\\oauth\\utility\\ZohoOAuthHTTPConnector' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthHTTPConnector.php',
        'zcrmsdk\\oauth\\utility\\ZohoOAuthParams' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthParams.php',
        'zcrmsdk\\oauth\\utility\\ZohoOAuthTokens' => __DIR__ . '/..' . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthTokens.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77204a26215a26ca84e02dd21dae89f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77204a26215a26ca84e02dd21dae89f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77204a26215a26ca84e02dd21dae89f9::$classMap;

        }, null, ClassLoader::class);
    }
}
