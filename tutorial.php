<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/MisService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/MisService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Mis\ClassMap::get(),
];
/**
 * Samples for Execute ServiceType
 */
$execute = new \Pggns\MidocoApi\Mis\ServiceType\Execute($options);
$execute->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for executeQueryWS operation/method
 */
if ($execute->executeQueryWS(new \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Mis\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getCampaignWS operation/method
 */
if ($get->getCampaignWS(new \Pggns\MidocoApi\Mis\StructType\GetCampaignReqType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignNextPageWS operation/method
 */
if ($get->getCampaignNextPageWS(new \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignPrevPageWS operation/method
 */
if ($get->getCampaignPrevPageWS(new \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignFirstPageWS operation/method
 */
if ($get->getCampaignFirstPageWS(new \Pggns\MidocoApi\Mis\StructType\GetCampaignFirstLastPageReqType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignLastPageWS operation/method
 */
if ($get->getCampaignLastPageWS(new \Pggns\MidocoApi\Mis\StructType\GetCampaignFirstLastPageReqType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTextTemplate operation/method
 */
if ($get->getTextTemplate(new \Pggns\MidocoApi\Mis\StructType\GetTextTemplateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignDefinition operation/method
 */
if ($get->getCampaignDefinition(new \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTemplateTextForCustomer operation/method
 */
if ($get->getTemplateTextForCustomer(new \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableCampaignFields operation/method
 */
if ($get->getAvailableCampaignFields(new \Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSqlMappingInfo operation/method
 */
if ($get->getSqlMappingInfo(new \Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJasperReport operation/method
 */
if ($get->getJasperReport(new \Pggns\MidocoApi\Mis\StructType\GetJasperReportRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJasperParameter operation/method
 */
if ($get->getJasperParameter(new \Pggns\MidocoApi\Mis\StructType\GetJasperParameterRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJasperReportParam operation/method
 */
if ($get->getJasperReportParam(new \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllJasperReports operation/method
 */
if ($get->getAllJasperReports(new \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllJasperParameters operation/method
 */
if ($get->getAllJasperParameters(new \Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getValuesFromTable operation/method
 */
if ($get->getValuesFromTable(new \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedJasperReportParameters operation/method
 */
if ($get->getAssignedJasperReportParameters(new \Pggns\MidocoApi\Mis\StructType\GetAssignedJasperReportParametersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedSavedReport operation/method
 */
if ($get->getAssignedSavedReport(new \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSavedReport operation/method
 */
if ($get->getSavedReport(new \Pggns\MidocoApi\Mis\StructType\GetSavedReportRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedReportForRole operation/method
 */
if ($get->getAssignedReportForRole(new \Pggns\MidocoApi\Mis\StructType\GetAssignedReportForRoleRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllJasperReport operation/method
 */
if ($get->getAllJasperReport(new \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReportIdenticalParamList operation/method
 */
if ($get->getReportIdenticalParamList(new \Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoExportList operation/method
 */
if ($get->getMidocoExportList(new \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCriteriaFieldsForDisplay operation/method
 */
if ($get->getCriteriaFieldsForDisplay(new \Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignFieldValues operation/method
 */
if ($get->getCampaignFieldValues(new \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignOrgUnits operation/method
 */
if ($get->getCampaignOrgUnits(new \Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMisCampaignDocuments operation/method
 */
if ($get->getMisCampaignDocuments(new \Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEstimateMisCampaignTemplateResults operation/method
 */
if ($get->getEstimateMisCampaignTemplateResults(new \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoMisCampaignOrgUnits operation/method
 */
if ($get->getMidocoMisCampaignOrgUnits(new \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExecutedCampaignsForTemplate operation/method
 */
if ($get->getExecutedCampaignsForTemplate(new \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaignResultsInfo operation/method
 */
if ($get->getCampaignResultsInfo(new \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Mis\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveCampaign operation/method
 */
if ($save->saveCampaign(new \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCampaignWS operation/method
 */
if ($save->saveCampaignWS(new \Pggns\MidocoApi\Mis\StructType\SaveCampaignWSRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveJasperReportParamValue operation/method
 */
if ($save->saveJasperReportParamValue(new \Pggns\MidocoApi\Mis\StructType\SaveJasperReportParamValueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveJasperParameter operation/method
 */
if ($save->saveJasperParameter(new \Pggns\MidocoApi\Mis\StructType\SaveJasperParameterRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveJasperReport operation/method
 */
if ($save->saveJasperReport(new \Pggns\MidocoApi\Mis\StructType\SaveJasperReportRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveJasperReportWithParameterValue operation/method
 */
if ($save->saveJasperReportWithParameterValue(new \Pggns\MidocoApi\Mis\StructType\SaveJasperReportWithParamValueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAccessJasperReport operation/method
 */
if ($save->saveAccessJasperReport(new \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveReportVersion operation/method
 */
if ($save->saveReportVersion(new \Pggns\MidocoApi\Mis\StructType\SaveReportVersionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCopyOfSavedReport operation/method
 */
if ($save->saveCopyOfSavedReport(new \Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCampaignOrgUnit operation/method
 */
if ($save->saveCampaignOrgUnit(new \Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMisCampaignDocument operation/method
 */
if ($save->saveMisCampaignDocument(new \Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Pggns\MidocoApi\Mis\ServiceType\Check($options);
$check->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for checkEmailReachability operation/method
 */
if ($check->checkEmailReachability(new \Pggns\MidocoApi\Mis\StructType\CheckEmailReachabilityRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkSMSReachability operation/method
 */
if ($check->checkSMSReachability(new \Pggns\MidocoApi\Mis\StructType\CheckSMSReachabilityRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkLetterReachability operation/method
 */
if ($check->checkLetterReachability(new \Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Split ServiceType
 */
$split = new \Pggns\MidocoApi\Mis\ServiceType\Split($options);
$split->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for splitCampaignWS operation/method
 */
if ($split->splitCampaignWS(new \Pggns\MidocoApi\Mis\StructType\SplitCampaignReqType()) !== false) {
    print_r($split->getResult());
} else {
    print_r($split->getLastError());
}
/**
 * Samples for Perform ServiceType
 */
$perform = new \Pggns\MidocoApi\Mis\ServiceType\Perform($options);
$perform->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for performEmailCampaign operation/method
 */
if ($perform->performEmailCampaign(new \Pggns\MidocoApi\Mis\StructType\PerformEmailCampaignRequest()) !== false) {
    print_r($perform->getResult());
} else {
    print_r($perform->getLastError());
}
/**
 * Sample call for performSMSCampaign operation/method
 */
if ($perform->performSMSCampaign(new \Pggns\MidocoApi\Mis\StructType\PerformSMSCampaignRequest()) !== false) {
    print_r($perform->getResult());
} else {
    print_r($perform->getLastError());
}
/**
 * Sample call for performLetterCampaign operation/method
 */
if ($perform->performLetterCampaign(new \Pggns\MidocoApi\Mis\StructType\PerformLetterCampaignRequest()) !== false) {
    print_r($perform->getResult());
} else {
    print_r($perform->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\Mis\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchCampaignWS operation/method
 */
if ($search->searchCampaignWS(new \Pggns\MidocoApi\Mis\StructType\SearchCampaignReqType()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchTextTemplate operation/method
 */
if ($search->searchTextTemplate(new \Pggns\MidocoApi\Mis\StructType\SearchTextTemplateRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchJasperReport operation/method
 */
if ($search->searchJasperReport(new \Pggns\MidocoApi\Mis\StructType\SearchJasperReportRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \Pggns\MidocoApi\Mis\ServiceType\Remove($options);
$remove->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for removeNonReachableWS operation/method
 */
if ($remove->removeNonReachableWS(new \Pggns\MidocoApi\Mis\StructType\RemoveNonReachableWSRequest()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Mis\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteCampaign operation/method
 */
if ($delete->deleteCampaign(new \Pggns\MidocoApi\Mis\StructType\DeleteCampaignRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCampaignCustomers operation/method
 */
if ($delete->deleteCampaignCustomers(new \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteJasperParameter operation/method
 */
if ($delete->deleteJasperParameter(new \Pggns\MidocoApi\Mis\StructType\DeleteJasperParameterRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteJasperReport operation/method
 */
if ($delete->deleteJasperReport(new \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteJasperReportParamValue operation/method
 */
if ($delete->deleteJasperReportParamValue(new \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParamValueRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteJasperReportParameter operation/method
 */
if ($delete->deleteJasperReportParameter(new \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParameterRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSavedReport operation/method
 */
if ($delete->deleteSavedReport(new \Pggns\MidocoApi\Mis\StructType\DeleteSavedReportRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMisCampaignDocument operation/method
 */
if ($delete->deleteMisCampaignDocument(new \Pggns\MidocoApi\Mis\StructType\DeleteMisCampaignDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCentralCampaignAssignedOrgUnit operation/method
 */
if ($delete->deleteCentralCampaignAssignedOrgUnit(new \Pggns\MidocoApi\Mis\StructType\DeleteCentralCampaignAssignedOrgUnitRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Mark ServiceType
 */
$mark = new \Pggns\MidocoApi\Mis\ServiceType\Mark($options);
$mark->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for markCampaignAsExecuted operation/method
 */
if ($mark->markCampaignAsExecuted(new \Pggns\MidocoApi\Mis\StructType\MarkCampaignAsExecutedRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Pggns\MidocoApi\Mis\ServiceType\Add($options);
$add->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for addCustomerToCampaign operation/method
 */
if ($add->addCustomerToCampaign(new \Pggns\MidocoApi\Mis\StructType\AddCustomerToCampaignRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addCampaignToCampaign operation/method
 */
if ($add->addCampaignToCampaign(new \Pggns\MidocoApi\Mis\StructType\AddCampaignToCampaignRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Populate ServiceType
 */
$populate = new \Pggns\MidocoApi\Mis\ServiceType\Populate($options);
$populate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for populateMisTimeTables operation/method
 */
if ($populate->populateMisTimeTables(new \Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesRequest()) !== false) {
    print_r($populate->getResult());
} else {
    print_r($populate->getLastError());
}
/**
 * Samples for Fill ServiceType
 */
$fill = new \Pggns\MidocoApi\Mis\ServiceType\Fill($options);
$fill->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for fillJasperReport operation/method
 */
if ($fill->fillJasperReport(new \Pggns\MidocoApi\Mis\StructType\FillJasperReportRequest()) !== false) {
    print_r($fill->getResult());
} else {
    print_r($fill->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\Mis\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listAsCampaign operation/method
 */
if ($list->listAsCampaign(new \Pggns\MidocoApi\Mis\StructType\ListAsCampaignRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \Pggns\MidocoApi\Mis\ServiceType\_Print($options);
$print->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for printTemplateTextForCustomer operation/method
 */
if ($print->printTemplateTextForCustomer(new \Pggns\MidocoApi\Mis\StructType\PrintTemplateTextForCustomerRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
