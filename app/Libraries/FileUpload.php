<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Storage;

class FileUpload
{
    public static function upload($fileName,$path = "public")
    {
        $file = request()->file($fileName);
        
        if ($file->isValid()) {
            //Storage::disk('image')->put('avatars', $file);
            $path = $file->store($path,'image');
            return $path;
        }
        throw new \Exception("Upload fail");
    }

    public static function uploads($fileName,$path = "")
    {
        $files = request()->file($fileName);
        $paths = [];
        foreach ($files as  $file) {
            if ($file->isValid()) {
                $paths[] = $file->store($path);
            }
        }
        return $paths;
    }
}