<?php

require_once('src/components/header.html');
require_once('src/php/common/pdo.php');
require_once('src/php/pages/home.php');

$url = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// switch ($url[0]) {
//     case 'comic':
//         if (is_numeric($url[1])) {
//             // header("Location: src/php/pages/comic_details.php?comicID={$url['1']}");
//             exit();
//         }
//         echo "Object not found";
//         break;
// }

// @list(, $controllerName, $methodName) = explode('/', $url);
// $controllerName = !empty($controllerName) ? ucfirst($controllerName) : 'Home';
// $methodName = !empty($methodName) ? $methodName : 'index';
// $methodName .= match ($_SERVER['REQUEST_METHOD']) {
//     'POST' => 'Post',
//     'PUT' => 'Put',
//     'DELETE' => 'Delete',
//     default => '',
// };