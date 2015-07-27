<?php

/**
 * Created by PhpStorm.
 * User: LeFranj
 * Date: 7/26/2015
 * Time: 4:41 PM
 */
class SiteFindSim
{
    public static function run() {
        return self::readFile();
    }

    public function readFile() {
        $json = file_get_contents(SIM_DIR.DIRECTORY_SEPARATOR.SIM_SITE_FIND);
        $jsonDecoded = CJSON::decode($json);
        return $jsonDecoded;
    }
}