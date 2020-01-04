<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\PagesController' => $baseDir . '/app/controllers/PagesController.php',
    'App\\Controllers\\UsersController' => $baseDir . '/app/controllers/UsersController.php',
    'App\\Controllers\\ZohoAuthController' => $baseDir . '/app/controllers/ZohoAuthController.php',
    'App\\core\\App' => $baseDir . '/core/App.php',
    'App\\core\\Request' => $baseDir . '/core/Request.php',
    'App\\core\\Router' => $baseDir . '/core/Router.php',
    'ComposerAutoloaderInit77204a26215a26ca84e02dd21dae89f9' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit77204a26215a26ca84e02dd21dae89f9' => $vendorDir . '/composer/autoload_static.php',
    'Connection' => $baseDir . '/core/database/Connection.php',
    'Module' => $vendorDir . '/zohocrm/php-sdk/samplecodes/module.php',
    'Org' => $vendorDir . '/zohocrm/php-sdk/samplecodes/organization.php',
    'QueryBuilder' => $baseDir . '/core/database/QueryBuilder.php',
    'Record' => $vendorDir . '/zohocrm/php-sdk/samplecodes/record.php',
    'RestC' => $vendorDir . '/zohocrm/php-sdk/samplecodes/rest.php',
    'RestClient' => $vendorDir . '/zohocrm/php-sdk/samplecodes/bulkapi.php',
    'TAGAPI' => $vendorDir . '/zohocrm/php-sdk/samplecodes/tagAPI.php',
    'customView' => $vendorDir . '/zohocrm/php-sdk/samplecodes/customeview.php',
    'zcrmsdk\\crm\\api\\APIRequest' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/APIRequest.php',
    'zcrmsdk\\crm\\api\\handler\\APIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/APIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\APIHandlerInterface' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/APIHandlerInterface.php',
    'zcrmsdk\\crm\\api\\handler\\EntityAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/EntityAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\MassEntityAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/MassEntityAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\MetaDataAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/MetaDataAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\ModuleAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/ModuleAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\OrganizationAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/OrganizationAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\RelatedListAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/RelatedListAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\TagAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/TagAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\VariableAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/VariableAPIHandler.php',
    'zcrmsdk\\crm\\api\\handler\\VariableGroupAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/handler/VariableGroupAPIHandler.php',
    'zcrmsdk\\crm\\api\\response\\APIResponse' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/response/APIResponse.php',
    'zcrmsdk\\crm\\api\\response\\BulkAPIResponse' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/response/BulkAPIResponse.php',
    'zcrmsdk\\crm\\api\\response\\CommonAPIResponse' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/response/CommonAPIResponse.php',
    'zcrmsdk\\crm\\api\\response\\EntityResponse' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/response/EntityResponse.php',
    'zcrmsdk\\crm\\api\\response\\FileAPIResponse' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/response/FileAPIResponse.php',
    'zcrmsdk\\crm\\api\\response\\ResponseInfo' => $vendorDir . '/zohocrm/php-sdk/src/crm/api/response/ResponseInfo.php',
    'zcrmsdk\\crm\\bulkapi\\handler\\BulkAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkapi/handler/BulkAPIHandler.php',
    'zcrmsdk\\crm\\bulkapi\\handler\\BulkReadAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkapi/handler/BulkReadAPIHandler.php',
    'zcrmsdk\\crm\\bulkapi\\handler\\BulkWriteAPIHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkapi/handler/BulkWriteAPIHandler.php',
    'zcrmsdk\\crm\\bulkapi\\response\\BulkResponse' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkapi/response/BulkResponse.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkCallBack' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkCallBack.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkCriteria' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkCriteria.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkQuery' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkQuery.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkRead' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkRead.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkResult' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkResult.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWrite' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWrite.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWriteFieldMapping' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWriteFieldMapping.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWriteFileStatus' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWriteFileStatus.php',
    'zcrmsdk\\crm\\bulkcrud\\ZCRMBulkWriteResource' => $vendorDir . '/zohocrm/php-sdk/src/crm/bulkcrud/ZCRMBulkWriteResource.php',
    'zcrmsdk\\crm\\crud\\ZCRMAttachment' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMAttachment.php',
    'zcrmsdk\\crm\\crud\\ZCRMCustomView' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMCustomView.php',
    'zcrmsdk\\crm\\crud\\ZCRMCustomViewCategory' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMCustomViewCategory.php',
    'zcrmsdk\\crm\\crud\\ZCRMCustomViewCriteria' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMCustomViewCriteria.php',
    'zcrmsdk\\crm\\crud\\ZCRMEventParticipant' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMEventParticipant.php',
    'zcrmsdk\\crm\\crud\\ZCRMField' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMField.php',
    'zcrmsdk\\crm\\crud\\ZCRMInventoryLineItem' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMInventoryLineItem.php',
    'zcrmsdk\\crm\\crud\\ZCRMJunctionRecord' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMJunctionRecord.php',
    'zcrmsdk\\crm\\crud\\ZCRMLayout' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMLayout.php',
    'zcrmsdk\\crm\\crud\\ZCRMLeadConvertMapping' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMLeadConvertMapping.php',
    'zcrmsdk\\crm\\crud\\ZCRMLeadConvertMappingField' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMLeadConvertMappingField.php',
    'zcrmsdk\\crm\\crud\\ZCRMLookupField' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMLookupField.php',
    'zcrmsdk\\crm\\crud\\ZCRMModule' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMModule.php',
    'zcrmsdk\\crm\\crud\\ZCRMModuleRelatedList' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMModuleRelatedList.php',
    'zcrmsdk\\crm\\crud\\ZCRMModuleRelation' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMModuleRelation.php',
    'zcrmsdk\\crm\\crud\\ZCRMNote' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMNote.php',
    'zcrmsdk\\crm\\crud\\ZCRMOrgTax' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMOrgTax.php',
    'zcrmsdk\\crm\\crud\\ZCRMPermission' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMPermission.php',
    'zcrmsdk\\crm\\crud\\ZCRMPickListValue' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMPickListValue.php',
    'zcrmsdk\\crm\\crud\\ZCRMPriceBookPricing' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMPriceBookPricing.php',
    'zcrmsdk\\crm\\crud\\ZCRMProfileCategory' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMProfileCategory.php',
    'zcrmsdk\\crm\\crud\\ZCRMProfileSection' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMProfileSection.php',
    'zcrmsdk\\crm\\crud\\ZCRMRecord' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMRecord.php',
    'zcrmsdk\\crm\\crud\\ZCRMRelatedListProperties' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMRelatedListProperties.php',
    'zcrmsdk\\crm\\crud\\ZCRMSection' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMSection.php',
    'zcrmsdk\\crm\\crud\\ZCRMTag' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMTag.php',
    'zcrmsdk\\crm\\crud\\ZCRMTax' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMTax.php',
    'zcrmsdk\\crm\\crud\\ZCRMTrashRecord' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMTrashRecord.php',
    'zcrmsdk\\crm\\crud\\ZCRMVariable' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMVariable.php',
    'zcrmsdk\\crm\\crud\\ZCRMVariableGroup' => $vendorDir . '/zohocrm/php-sdk/src/crm/crud/ZCRMVariableGroup.php',
    'zcrmsdk\\crm\\exception\\APIExceptionHandler' => $vendorDir . '/zohocrm/php-sdk/src/crm/exception/APIExceptionHandler.php',
    'zcrmsdk\\crm\\exception\\ZCRMException' => $vendorDir . '/zohocrm/php-sdk/src/crm/exception/ZCRMException.php',
    'zcrmsdk\\crm\\setup\\org\\ZCRMOrganization' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/org/ZCRMOrganization.php',
    'zcrmsdk\\crm\\setup\\restclient\\ZCRMRestClient' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/restclient/ZCRMRestClient.php',
    'zcrmsdk\\crm\\setup\\users\\ZCRMProfile' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMProfile.php',
    'zcrmsdk\\crm\\setup\\users\\ZCRMRole' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMRole.php',
    'zcrmsdk\\crm\\setup\\users\\ZCRMUser' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMUser.php',
    'zcrmsdk\\crm\\setup\\users\\ZCRMUserCustomizeInfo' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMUserCustomizeInfo.php',
    'zcrmsdk\\crm\\setup\\users\\ZCRMUserTheme' => $vendorDir . '/zohocrm/php-sdk/src/crm/setup/users/ZCRMUserTheme.php',
    'zcrmsdk\\crm\\utility\\APIConstants' => $vendorDir . '/zohocrm/php-sdk/src/crm/utility/APIConstants.php',
    'zcrmsdk\\crm\\utility\\CommonUtil' => $vendorDir . '/zohocrm/php-sdk/src/crm/utility/CommonUtil.php',
    'zcrmsdk\\crm\\utility\\Logger' => $vendorDir . '/zohocrm/php-sdk/src/crm/utility/Logger.php',
    'zcrmsdk\\crm\\utility\\ZCRMConfigUtil' => $vendorDir . '/zohocrm/php-sdk/src/crm/utility/ZCRMConfigUtil.php',
    'zcrmsdk\\crm\\utility\\ZohoHTTPConnector' => $vendorDir . '/zohocrm/php-sdk/src/crm/utility/ZohoHTTPConnector.php',
    'zcrmsdk\\oauth\\ZohoOAuth' => $vendorDir . '/zohocrm/php-sdk/src/oauth/ZohoOAuth.php',
    'zcrmsdk\\oauth\\ZohoOAuthClient' => $vendorDir . '/zohocrm/php-sdk/src/oauth/ZohoOAuthClient.php',
    'zcrmsdk\\oauth\\exception\\ZohoOAuthException' => $vendorDir . '/zohocrm/php-sdk/src/oauth/exception/ZohoOAuthException.php',
    'zcrmsdk\\oauth\\persistence\\ZohoOAuthPersistenceByFile' => $vendorDir . '/zohocrm/php-sdk/src/oauth/persistence/ZohoOAuthPersistenceByFile.php',
    'zcrmsdk\\oauth\\persistence\\ZohoOAuthPersistenceHandler' => $vendorDir . '/zohocrm/php-sdk/src/oauth/persistence/ZohoOAuthPersistenceHandler.php',
    'zcrmsdk\\oauth\\persistence\\ZohoOAuthPersistenceInterface' => $vendorDir . '/zohocrm/php-sdk/src/oauth/persistence/ZohoOAuthPersistenceInterface.php',
    'zcrmsdk\\oauth\\utility\\ZohoOAuthConstants' => $vendorDir . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthConstants.php',
    'zcrmsdk\\oauth\\utility\\ZohoOAuthHTTPConnector' => $vendorDir . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthHTTPConnector.php',
    'zcrmsdk\\oauth\\utility\\ZohoOAuthParams' => $vendorDir . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthParams.php',
    'zcrmsdk\\oauth\\utility\\ZohoOAuthTokens' => $vendorDir . '/zohocrm/php-sdk/src/oauth/utility/ZohoOAuthTokens.php',
);