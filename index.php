<?php
use core\C\MakeFileController as MakeFileController;
use core\Route as Route;
require_once 'app/core/M/Connection_pdo.php';
require_once 'app/core/start.php';
require 'web_routes.php';
// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem(__DIR__.'/app/V');

// Instantiate our Twig
$twig = new Twig_Environment($loader);

$urlparam = isset($_GET['url'])?$_GET['url']:null;
if(in_array($urlparam,Route::$validRoutes))
{
    $f=new Connection_pdo();
    $f->connect();exit;
    
    exit;
    // $r=new MakeFileController();
    // $r->run();
    // // exit("********");
    echo $twig->render("$urlparam.html", ['name' => 'Fabien']);
}
else
    echo $twig->render("error.html", ['name' => 'Fabien']);

exit;

?>
<?php
?>

