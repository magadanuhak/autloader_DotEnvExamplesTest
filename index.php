<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require "vendor/autoload.php";

use Dotenv\Dotenv;
use site\app\Classic;
    use site\app\controllers\MainController;
    use site\app\core\APP;
    use site\app\PaymentSystem\PayPal;
    use site\app\PaymentService;
    use site\app\core\DB;

    $env = Dotenv::create("config");
    $env->load();
    $db = new DB();
    var_dump($db->getConfiguration());