<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\PhotoSize;

abstract class ArrayOfPhotoSize
{
    public static function fromResponse($data)
    {
        $arrayOfPhotoSize = [];
        foreach ($data as $photoSizeItem) {
            $arrayOfPhotoSize[] = PhotoSize::fromResponse($photoSizeItem);
        }

        return $arrayOfPhotoSize;
    }
}
