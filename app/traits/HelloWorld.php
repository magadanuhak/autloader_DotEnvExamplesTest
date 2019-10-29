<?php


namespace site\app\traits;


trait HelloWorld
{
    public function helloWorld()
    {
        echo 'Hello World!';
    }
    public function boot()
    {
        echo 'Bye men '.get_called_class();
    }

}