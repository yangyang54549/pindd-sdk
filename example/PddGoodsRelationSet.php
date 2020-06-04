<?php
/**
 * 示例接口名称：pdd.goods.relation.set
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Com\Pdd\Pop\Sdk\PopHttpClient;
use Com\Pdd\Pop\Sdk\Api\Request\PddGoodsRelationSetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddGoodsRelationSetRequest();

$request->setGoodsId(1);
$request->setOutGoodsId('str');
$request->setOutDetailUrl('str');
$request->setOutLowGoodsPrice(1);
$request->setOutHighGoodsPrice(1);
$request->setSourceType(1);
$request->setPostage(1);
$request->setOutMallId(1);
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