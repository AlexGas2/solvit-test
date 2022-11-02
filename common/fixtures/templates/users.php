<?php
return [
    'username' => 'user_' . $index,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'auth_key' => \Yii::$app->security->generateRandomString(32),
    'password_hash' => \Yii::$app->security->generatePasswordHash(Yii::$app->params['test_password']),
    'password_reset_token' => null,
    'email' => 'email_' . $index . '@solvit.tst',
    'status' => 10,
    'created_at' => time(),
    'updated_at' => time(),
    'verification_token' => null
];
