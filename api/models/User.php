<?php
namespace api\models;

use common\models\User as CommonUser;

class User extends CommonUser
{

    public function fields()
    {
        return [
            'id',
            'first_name',
            'last_name',
            'albums'
        ];
    }

}