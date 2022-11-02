<?php
namespace api\models;

use common\models\Photo as CommonPhoto;

class Photo extends CommonPhoto
{

    public function fields()
    {
        return [
            'id',
            'title',
            'url'
        ];
    }

}