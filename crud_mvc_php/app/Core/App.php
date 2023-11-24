<?php

class App
{
    protected $controllers = "HomeControllers";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
    $url = $_SERVER["QUERY_STRING"];

    $url = explode("/", $url);

    echo $url[2] . "kmfkmrmf";

    }
}


$app = new App();
