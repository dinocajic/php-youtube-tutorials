<?php
namespace Controllers\Home;

require_once("Views/home/index.php");

use Views\Home\HomeView;

class HomeController
{
    public function index()
    {
        $home_view = new HomeView;
        echo $home_view->index();
    }
}