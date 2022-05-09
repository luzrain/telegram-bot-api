<?php

namespace TelegramBot\Api\Types;

use CURLFile;

/**
 * This object represents the contents of a file to be uploaded.
 * Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
class InputFile
{
    public function __construct()
    {
        
    }

    public function create(string $filename): self
    {
        return new self();
    }
}
