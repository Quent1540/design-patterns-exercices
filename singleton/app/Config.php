<?php
namespace App;

final class Config{
    private static $instance;
    private $settings = [];

    private function __construct()
    {
        $this->settings = require('../config/config.php');
    }

    public static function getInstance(): Config
    {
        if(!self::$instance){
            self::$instance=new self();
        }
        return self::$instance;
    }

    public static function get(){
        return self::$instance->settings["apiKey"];
    }
}