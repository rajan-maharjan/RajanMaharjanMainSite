<?php
ini_set("date.timezone", "Asia/Kathmandu");
error_reporting(0);
session_start();

/* constant declaration */
include $relativePath."system-files/settings.php";
include $relativePath."system-files/constant.php";

include $relativePath.CLASS_PATH."connection.class.php";
$connectionObject = new connection($dbHostName,$dbUserName,$dbUserPwd,$dbName);

$connectionObject->dbConnect();
include $relativePath.CLASS_PATH."common.class.php";
include $relativePath.CLASS_PATH."category.class.php";
include $relativePath.CLASS_PATH."article.class.php";
include $relativePath.CLASS_PATH."clicks.class.php";
include $relativePath.CLASS_PATH."functions.class.php";
include $relativePath.CLASS_PATH."nepali.calendar.class.php";
include $relativePath.CLASS_PATH."phpmailer.class.php";
include $relativePath.CLASS_PATH."smtp.class.php";
include $relativePath.CLASS_PATH."rss.class.php";
include $relativePath.CLASS_PATH."technology.class.php";
include $relativePath.CLASS_PATH."videos.class.php";
include $relativePath.CLASS_PATH."works.class.php";

/* 
include $relativePath.CLASS_PATH."nepali.calendar.class.php";
include $relativePath.CLASS_PATH."rss.class.php";
*/

include $relativePath."system-files/class-objects.php";

?>