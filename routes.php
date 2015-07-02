<?php
// Конфигурация маршрутов URL проекта.
$routes = array
(
    // Главная страница сайта (http://testpage.cc/)
    array(
        // паттерн в формате Perl-совместимого реулярного выражения
        'pattern' => '~^/$~',
        // Имя класса обработчика
        'class' => 'Index',
        // Имя метода класса обработчика
        'method' => 'index'
    ),

//    // Страница регистрации пользователя (http://testpage/registration.xhtml)
//    array(
//        'pattern' => '~^/registration\.xhtml$~',
//        'class' => 'User',
//        'method' => 'registration',
//    ),

    // Досье пользователя (http://testpage.cc/show/12345.xhtml)
    array(
        'pattern' => '~^/show/([0-9]+)\.xhtml$~',
        'class' => 'User',
        'method' => 'show',
        'template'=> 'user_account.php',
        // В aliases перечисляются имена переменных, которые должны быть в дальнейшем созданы
        // и заполнены значениями, взятыми на основании разбора URL адреса.
        // В данном случае в переменную user_id должен будет записаться числовой
        // идентификатор пользователя - 12345
        'aliases' => array('user_id'),
    ),
    //редактирование пользователя
    array(
        'pattern' => '~^/update/([0-9]+)\.xhtml$~',
        'class' => 'User',
        'method' => 'show',
        'template'=>'update_user.php',
        // В aliases перечисляются имена переменных, которые должны быть в дальнейшем созданы
        // и заполнены значениями, взятыми на основании разбора URL адреса.
        // В данном случае в переменную user_id должен будет записаться числовой
        // идентификатор пользователя - 12345
        'aliases' => array('user_id'),
    ),

//    // Форум (http://testpage.cc/forum/web-development/php/12345.xhtml)
//    array(
//        'pattern' => '~^/forum(/[a-z0-9_/\-]+/)([0-9]+)\.xhtml$~',
//        'class' => 'Forum',
//        'method' => 'viewTopick',
//        // Будут созданы переменные:
//        // forum_url = '/web-development/php/'
//        // topic_id = 12345
//        'aliases' => array('forum_url', 'topic_id'),
//    ),
//
//    // и т.д.
);
?>