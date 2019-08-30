<?php
// 指定允许其他域名访问  
header('Access-Control-Allow-Origin:*');  
header('Content-type:text/json');  
function hitokoto()
{
 $data  = dirname(__FILE__) . '/hitokoto.json';
$json  = file_get_contents($data);
$array = json_decode($json, true);
$count = count($array);
if ($count != 0) {
    $hitokoto = $array;
    echo json_encode(array('status' => 'success', 'result' => $hitokoto));
    exit;
} else {
    echo json_encode(array('status' => 'error'));
    exit;
}

}
hitokoto();
?>