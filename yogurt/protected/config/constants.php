<?php
/**
 * Created by PhpStorm.
 * User: LeFranj
 * Date: 7/26/2015
 * Time: 4:44 PM
 */
$iniFile = dirname(__FILE__).DIRECTORY_SEPARATOR.'main.ini';
$ini = parse_ini_file($iniFile, true);
foreach ($ini['CONSTANTS'] as $pName => $pValue) {
    define('CONST_'.strtoupper($pName), $pValue);
}
foreach ($ini['PATH'] as $pName => $pValue) {
    define('PATH_'.strtoupper($pName), $pValue);
}
foreach ($ini['SIM'] as $pName => $pValue) {
    define('SIM_'.strtoupper($pName), $pValue);
}
unset($ini);
unset($iniFile);

define('PATH_TEMP_DIR', dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp');