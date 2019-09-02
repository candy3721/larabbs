<?php

namespace App\Handlers;

class ImageUploadHandler
{
    //只允许以下后缀名的图片文件上传
    protected $allowed_ext = ["png","jpg","gif","jpeg"];
    public function save($file,$folder,$file_prefix)
    {

    }
}