<?php
require_once 'vendor/autoload.php';
spl_autoload_register(function ($class) {
    require_once strtr($class, '\\_', '//').'.php';
});
<<<<<<< HEAD
=======
?>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
