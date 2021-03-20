<?php
$controllers = array(
  'pages' => ['home', 'error'],
  'works' => ['index', 'addWork', 'editWork', 'deleteWork']
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'works';
  $action = 'error';
}
include_once('controller/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();