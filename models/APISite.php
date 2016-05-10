<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 10/05/16
 * Time: 18:38
 */

namespace app\models;


class APISite
{
    const TOKEN = '7c6ad7dd16b341499df9be2f9dbe59e1';

    public static function api($uri)
    {
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token:'.self::TOKEN;
        $stream_context = stream_context_create($reqPrefs);
        $response = file_get_contents($uri, false, $stream_context);
        $data = json_decode($response);
        return $data;
    }
}