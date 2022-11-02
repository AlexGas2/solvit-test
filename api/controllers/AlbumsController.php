<?php
namespace api\controllers;


use api\components\ApiSerializer;
use api\models\Album;
use yii\web\NotFoundHttpException;

class AlbumsController extends BaseController
{
    public $modelClass = 'api\models\Album';

    public $serializer = [
        'class' => ApiSerializer::class,
        'defaultFields' => [
            'id', 'title'
        ]
    ];

    public function actions()
    {
        $act = parent::actions();
        $actions=[];
        $actions['index']=$act['index'];
        $actions ['index'] ['pagination']['pageSize'] = 5;

        return $actions;
    }

    public function actionView($id)
    {

        $album = Album::findOne((int)$id);

        if ($album === null) {
            throw new NotFoundHttpException('Album Not Found');
        }

        $this->serializer['defaultFields'] = ['id', 'title', 'photos'];

        return $album;
    }
}
