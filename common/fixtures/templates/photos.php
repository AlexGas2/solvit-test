<?php
return [
    'album_id' => (int)ceil(($index + 1) / 10),
    'title' => 'Photo title for album title #' . $index,
    'url' => Yii::$app->params['web_domain'] . '/albums/a' . rand(1,10) . '.jpg'
];
