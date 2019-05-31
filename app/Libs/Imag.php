<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 31.05.2019
 * Time: 18:33
 */

/*Указываем папку где находится файл*/
namespace App\Libs;

use Image;
use Auth;

class Imag
{

    public function __construct()
    {

    }

    public function url($path = null, $directory = null, $name = null)
    {
        if ($path != NULL) {
            if ($directory != NULL) {
                $dir = public_path() . '/' . $directory . '/';
            } else {
                $dir = public_path() . '/uploads/';
            }

            if ($name != NULL) {
                $fileName = $name;
            } else {
                $fileName = time() . '.jpg';
            }

            $img = Image::make($path);
            $img->save($dir . $fileName);
            $img->resize(200, null, function ($constarint) {
                $constarint->aspectRatio();
            });
            $img->save($dir . 's_' . $fileName);

        } else {
            return false;
        }
        return $fileName;
    }

}



