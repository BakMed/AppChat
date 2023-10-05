<?php

namespace App;

use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;
use Moathdev\MediaUploader\Traits\HasMediaUploader;
class Media extends BaseMedia
{
    use HasMediaUploader;
}
