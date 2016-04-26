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
    private $all_pictures;
    private $name_pictures;

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

    private function nameImages()
    {
        $this->name_pictures = array();
        for($i = 0; $i < count($this->all_pictures); $i++)
        {
            $this->name_pictures[$i] = explode(".",$this->all_pictures[$i])[0];
        }
    }

    public function outImages($url)
    {
        $path = Yii::$app->request->baseUrl;
        $dir = $_SERVER['DOCUMENT_ROOT'] . $path . $url;
        $dirLocal = $path . $url .'/';
        $this->outDirFile($dir);
        $this->nameImages();
        return ['dirLocal'=>$dirLocal, 'all_pictures'=>$this->all_pictures, 'name_pictures'=>$this->name_pictures];
    }
}