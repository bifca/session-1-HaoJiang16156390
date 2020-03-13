<?php
header('Content-type:text/html;charset=utf-8');

//配置您申请的appkey
$appkey = "48fa12217d8e00c443e452ef6a337e16";

//************1.根据城市查询天气************
//$url = "https://api.openweathermap.org/data/2.5/weather";
$url = "https://api.openweathermap.org/data/2.5/forecast";//最近5天，每3个小时一次
$params = array(
    "id" => "",
    "APPID" => $appkey,
    'lang' => 'en'
);

if ($_POST && isset($_POST['city'])){
    $params['id'] = $_POST['city'];
    $content = curlapi($url, $params, 1);
    $result = json_encode($content);
    echo $result;
    die();
}




/**
 * 请求方法
 * @param $requesturl请求地址
 * @param $requestdata请求参数 类型为数组
 * @param int $is_https请求类型0http ;1https
 * @param $type请求方式 ;0get、1post
 * @param int $httpCode 返回状态码
 * @return mixed
 */
function curlapi($requesturl, $requestdata = null, $is_https = 0, $type = 0, $headers = null, &$httpCode = 0)
{
    $requestdata = http_build_query($requestdata);
    $ch = curl_init();
    if ($is_https == 1) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    } else {
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/json'));
    }
    if ($type) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestdata);
        curl_setopt($ch, CURLOPT_URL, $requesturl);
    } else {
        if ($requestdata) {
            curl_setopt($ch, CURLOPT_URL, $requesturl . '?' . $requestdata);
        } else {
            curl_setopt($ch, CURLOPT_URL, $requesturl);
        }
    }
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    $file_contents = curl_exec($ch);//获得返回值
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $file_contents;
}