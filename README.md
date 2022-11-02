FAQ:
1. Установка composer install + php init.php + yii migrate
2. Фикстуры для наполнения базы
    ВАЖНО!!!! перед запуском common/config/params-local.php указать параметр 'test_password' => 'qwerty' для генерации пароля тестовых пользователей
   php yii fixture/generate users --count=10 --interactive=0
   php yii fixture/generate albums --count=100 --interactive=0
   php yii fixture/generate photos --count=1000 --interactive=0
   php yii fixture/load "*" --interactive=0
3. В ТЗ возможно ошибка ![img_2.png](img_2.png)
 вероятно id, title, photos[]