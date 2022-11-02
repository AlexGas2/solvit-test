<?php
namespace api\models;

use common\models\Album as CommonAlbum;

class Album extends CommonAlbum
{

    public function fields()
    {
        return [
            'id',
            'title',
            'photos',
        ];
    }

}