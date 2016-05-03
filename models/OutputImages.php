<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 03/05/16
 * Time: 15:32
 */

namespace app\models;

use Yii;


class OutputImages
{
    private $all_pictures;

    private function outDirFile($directory)
    {
        $this->all_pictures = array();
        $dir_handle = @opendir($directory);
        $i = 0;
        while ($file = @readdir($dir_handle))
        {
            if($file=="." || $file == "..") continue;
            $this->all_pictures[$i] = $file;
            $i++;
        }
        closedir($dir_handle);
    }

    public function outImages($url)
    {
        $path = Yii::$app->request->baseUrl;
        $dir = $_SERVER['DOCUMENT_ROOT'] . $path . $url;
        $dirLocal = $path . $url .'/';
        $this->outDirFile($dir);
        return ['dirLocal'=>$dirLocal, 'all_pictures'=>$this->all_pictures];
    }
}