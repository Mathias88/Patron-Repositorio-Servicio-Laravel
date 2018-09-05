<?php

namespace App\Services;


class UploadImageService
{
    public function upload($imageFile)
    {
        $imageFile = $this->cut($imageFile);
        $imageFile = $this->rotate($imageFile);
        $this->sendToServer($imageFile);
    }

    public function cut($imageFile)
    {
        return $imageFile;
    }

    public function rotate($imageFile)
    {
        return $imageFile;
    }

    private function sendToServer($imageFile)
    {
        return $imageFile;
    }
}