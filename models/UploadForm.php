<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file', 'extensions' => 'jpg,png', 'maxSize' => 102400, 'checkExtensionByMimeType' => false]
        ];
    }
}