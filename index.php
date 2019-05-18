<?php
use core\C\MakeFileController as MakeFileController;
require_once 'app/core/start.php';

// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem(__DIR__.'/app/V');

 // Instantiate our Twig
$twig = new Twig_Environment($loader);

echo $twig->render('welcome.html', ['name' => 'Fabien']);
?>

<?php
    $r=new MakeFileController();
    $r->run();
?>
