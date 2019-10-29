<?php


namespace site\app\traits;


trait GoodByeWorld
{
    public function bye()
    {
        echo 'Bye ! ';
    }
    public function boot()
    {
        echo 'Bye men '.get_called_class();
    }
}