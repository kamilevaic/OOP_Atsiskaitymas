<?php

namespace Kamil\Oop\Controllers;

class

HomePageController
{
    public function RenderHomePage()
    {
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . './../Views/HomePage.tpl');
    }

    public function RenderNotFoundPage()
    {
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . './../Views/PageNotFound.tpl');
    }
}