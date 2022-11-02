<?php
namespace api\models;

use common\models\User as CommonUser;

class User extends CommonUser
{

    public function fields()
    {
        return parent::fields();
    }

    public function extraFields()
    {
        return [];
    }
}