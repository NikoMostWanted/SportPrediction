<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 20/04/16
 * Time: 20:23
 */

namespace app\models;

use Yii;

class OutputImages
{
    private function outDirFile($directory)
    {
        $all_picture = array();
        $dir_handle = @opendir($directory);
        $i = 0;
        while ($file = @readdir($dir_handle))
        {
            if($file=="." || $file == "..") continue;
            $all_picture[$i] = $file;
            $i++;
        }
        closedir($dir_handle);
        return $all_picture;
    }

    public function outImages($url)
    {
        $path = Yii::$app->request->baseUrl;
        $dir = $_SERVER['DOCUMENT_ROOT'] . $path . $url;
        $dirLocal = $path . $url .'/';
        $all_pictures = $this->outDirFile($dir);
        return ['dirLocal'=>$dirLocal, 'all_pictures'=>$all_pictures];
    }
}