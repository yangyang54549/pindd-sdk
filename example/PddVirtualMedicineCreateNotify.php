<?php
/**
 * 示例接口名称：pdd.virtual.medicine.create.notify
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Com\Pdd\Pop\Sdk\PopHttpClient;
use Com\Pdd\Pop\Sdk\Api\Request\PddVirtualMedicineCreateNotifyRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddVirtualMedicineCreateNotifyRequest();

$request->setStatus(1);
$request->setErrMessage('str');
$request->setMedicalNo('str');
$request->setMallId(1);
$request->setDiagnosticNo('str');
$request->setDiagnosticName('str');
$request->setAppeal('str');
$request->setPastHistory('str');
$request->setAllergyHistory('str');
$request->setMedicalRecord('str');
$request->setHospitalDoctorName('str');
$request->setHospitalDoctorChaper('str');
$request->setHospitalPharmacistsName('str');
$request->setHospitalPharmacistsChapter('str');
$request->setPhysicalFunction();
$request->setDrugInfo();
try{
	$response = $client->syncInvoke($request);
} catch(Com\Pdd\Pop\Sdk\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);