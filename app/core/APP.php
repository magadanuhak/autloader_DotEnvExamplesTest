<?php


namespace site\app\core;


use site\app\traits\GoodByeWorld;
use site\app\traits\HelloWorld;

class APP
{
    use HelloWorld, GoodByeWorld {
        HelloWorld::boot insteadof GoodByeWorld;
    }
    public function __construct()
    {
        echo "App Loaded <br>";
        $this->helloWorld();
        $this->bye();
    }
}