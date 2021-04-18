<?php

namespace App\Http\Services;

use File;
use Illuminate\Http\UploadedFile;

class UploaderService
{
    /**
     * @param UploadedFile $file
     * @param $folder
     * @return string
     */
    public function upload(UploadedFile $file, $folder)
    {
        $date_path = date("Y") . '/' . date("m") . '/' . date("d") . '/';
        $path = public_path() . '/assets/uploads/' . $folder . '/' . $date_path;

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }

        $file_name = date('YmdHis') . mt_rand() . '_' . $folder . '.' . $file->getClientOriginalExtension();

        if ($file->move($path, $file_name)) {
            return $img = '/assets/uploads/' . $folder . '/' . $date_path . $file_name;
        }
    }

    /**
     * This function to Delete file from director
     * @param $file_name
     * @return bool
     */
    public function deleteFile($file_name)
    {
        $file_path = public_path() . $file_name;
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        return true;
    }

}
