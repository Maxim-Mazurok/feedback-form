<?php

$GLOBALS['feedback-config'] = parse_ini_file(dirname(__FILE__) . "/../../config.ini", true);
/*var_dump($GLOBALS['feedback-config']);*/


/*include_once(dirname(__FILE__) . '/../../res/html/feedback-button.html');*/
/*include_once(dirname(__FILE__) . '/../../res/html/feedback-popup.html');*/
echo "<script>";
include_once(dirname(__FILE__) . '/../../res/js/script.js');
echo "</script>";