<?php
namespace api\controllers;


use api\components\ApiSerializer;
use api\models\User;
use yii\web\NotFoundHttpException;

class UsersController extends BaseController
{
    public $modelClass = 'api\models\User';

    public $serializer = [
        'class' => ApiSerializer::class,
        'defaultFields' => [
            'id', 'first_name', 'last_name'
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

        $user = User::findOne((int)$id);

        if ($user === null) {
            throw new NotFoundHttpException('User Not Found');
        }

        $this->serializer['defaultFields'] = ['id', 'first_name', 'last_name', 'albums'];

        return $user;
    }
}
