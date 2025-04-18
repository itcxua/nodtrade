<?php
define("URL","https://logisticstoukraine.com.ua");
define("EMAIL","logisticstoukraine@gmail.com");
$dev = true;
$deb = 1;
if ($deb == 0){
	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors','On');
} else {
	ini_set('display_errors','Off');
}
session_start();
$starttime=microtime();
$starttime=explode(" ",$starttime);
$starttime=$starttime[0]+$starttime[1];
define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
function LangUrl($addSegment = null, $removeSegment = null) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    $path = $_SERVER['REQUEST_URI'];
    if ($addSegment) {
        if (strpos($path, $addSegment) === false) {
            $path = rtrim($path, '/') . '/' . $addSegment;
        }
    }
    if ($removeSegment) {
        $path = str_replace('/' . $removeSegment, '', $path);
    }
    $currentUrl = $protocol . $domainName . $path;
    return $currentUrl;
}
?>