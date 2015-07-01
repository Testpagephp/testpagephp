<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'routes.php';
include_once 'user_manage.php';
// Тут нужно подключить через include файл с маршрутами, который описали выше.
// Назначаем модуль и действие по умолчанию.
$module = 'Not_Found';
$action = 'main';

// Массив параметров из URI запроса.
$params = array();

foreach ($routes as $map)
{
    // Для того, что бы через виртуальные адреса можно было также передавать параметры
    // через QUERY_STRING (т.е. через "знак вопроса" - ?param=value),
    // необходимо получить компонент пути - path без QUERY_STRING, т.к. в ином
    // случае виртуальный адрес попросту не совпадет ни с одним паттерном из массива $routes.
    // Данные, переданные через QUERY_STRING, также как и раньше будут содержаться в
    // суперглобальных массивах $_GET и $_REQUEST.
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (preg_match($map['pattern'], $url_path, $matches))
    {
        // Выталкиваем первый элемент - он содержит всю строку URI запроса
        // и в массиве $params он не нужен.
        array_shift($matches);

        // Формируем массив $params с теми названиями ключей переменных,
        // которые мы указали в $routes
        foreach ($matches as $index => $value)
        {
            $params[$map['aliases'][$index]] = $value;
        }

        $module = $map['class'];
        $action = $map['method'];

        break;
    }
}
$us = new $module($link);
$final = $us->$action($params);
$tpl = array('show'=>'user_account.php');
include($tpl[$action]);
//echo "\$module: $module\n";
//echo "\$action: $action\n";
//echo "\$params:\n";
//print_r($params['user_id']);
?>