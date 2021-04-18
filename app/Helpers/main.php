<?php

/**
* [sendResponse description]
* @param  [string] $message [message success]
* @param  [array] $data    [any data object or array]
* @return [json]          [json success]
*/
function sendResponse($message,$data,$status = null){
    empty($status) ? $status = 200 : $status;
    return response()->json([
        "status" => true,
        "message" => $message,
        "data"    => $data,
    ],$status);
}
/**
* [sendError description]
* @param  [string] $message [message error]
* @return [array]          [errors]
*/
function sendError($message,$status = null){
    empty($status) ? $status = 400 : $status;
    return response()->json([
        "status" => false,
        "message" => $message,
    ],$status);
}

/**
* [UploadImages]
* @param [folder] $dir   [FolderName]
* @param [string] $image [Name Of The Image]
*/
function UploadImages($dir, $image)
{
    $saveImage = '';
    if (! File::exists(public_path('uploads').'/' . $dir)) { // if file or fiolder not exists
        /**
        *
        * @param $PATH Required
        * @param $mode Defualt 0775
        * @param create the directories recursively if doesn't exists
        */
        File::makeDirectory(public_path('uploads') . '/' . $dir, 0775, true); // create the dir or the
    }
    if (File::isFile($image)) {
        $name       = $image->getClientOriginalName(); // get image name
        $extension  = $image->getClientOriginalExtension(); // get image extension
        $sha1       = sha1($name); // hash the image name
        $fileName   = rand(1, 1000000) . "_" . date("y-m-d-h-i-s") . "_" . $sha1 . "." . $extension; // create new name for the image
        // get the image realpath
        $uploadedImage = Image::make($image->getRealPath());
        $uploadedImage->save(public_path('uploads/' . $dir . '/' . $fileName), '100'); // save the image
        $saveImage = $dir . '/' . $fileName; // get the name of the image and the dir that uploaded in
    }
    return $saveImage;
}
