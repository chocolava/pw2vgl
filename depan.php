<?php 
spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

use app\View;
$v=new \app\View();
$v->render();

echo "<br>";
$v=new \src\View();
$v->render();

$z=new \src\Mahasiswa();
$z->test();

 ?>