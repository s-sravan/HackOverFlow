<?php //Database connection settings
defined('DBH') ? null : define ('DBH' , 'localhost');
defined('DBU') ? null : define ('DBU' , 'u827337180_quoradb');
defined('DBPW') ? null : define ('DBPW' , 'bdHQ!|S3');
defined('DBN') ? null : define ('DBN' , 'u827337180_quoradb');
defined('DBTP') ? null : define ('DBTP' , 'p_');

//Define your web accessible link to this script, including http:// or https:// with TRAILING SLASH / in the end !IMPORTANT
defined('WEB_LINK') ? null : define('WEB_LINK' , 'https://www.lucrato.in/quoradb/');
defined('ERROR_LINK') ? null : define('ERROR_LINK' , WEB_LINK );
defined('UPL_FILES') ? null : define('UPL_FILES' , WEB_LINK.'public');

//Facebook API Credentials, get them from https://developers.facebook.com/apps
$facebook_api = array("secret"=>"", "id" => "");

//Google API Credentials, get them from https://console.developers.google.com
$google_api = array("secret"=>"", "id" => "");

//Google Captcha Info, get them from https://www.google.com/recaptcha/admin
$captcha_info = array("secret"=>"6Lf6vskbAAAAAAqP7bjlyzy7yrwbficKl2IDz1vv", "sitekey" => "6Lf6vskbAAAAAI_VN8kTk4cbGHBzWrBre1Fzimne");

//Google Analytics Info, get them from https://analytics.google.com/analytics/web/
$analytics_info = false;

//AddThis Info, get them from https://www.addthis.com/dashboard/
$addthis_info = false;

require_once("/home/u827337180/domains/lucrato.in/public_html/quoradb/library/url_mapper.php");

?>