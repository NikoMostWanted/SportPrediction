<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 20/04/16
 * Time: 20:23
 */

namespace app\models;


class OutputImages
{
    public function outDirFile($directory)
    {
        $all_picture = array();
        $dir_handle = @opendir($directory) or die("Error open directory");
        $i = 0;
        while ($file = readdir($dir_handle))
        {
            if($file=="." || $file == "..") continue;
            $all_picture[$i] = $file;
            $i++;
        }
        closedir($dir_handle);
        return $all_picture;
    }
}