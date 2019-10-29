<?php


namespace site\app\core;

use Dotenv\Dotenv;

class DB
{
    private $configuration;
    public function __construct()
    {

        $this->configuration = [
          "host"     => $_ENV['DB_HOST'],
          "db"       => $_ENV['DB_NAME'],
          "user"     => $_ENV['DB_USER'],
          "password" => $_ENV['DB_PASSWORD']
        ];
        $_ENV['DB_HOST'];

    }

    /**
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}