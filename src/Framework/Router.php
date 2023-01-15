<?php

namespace Kamil\Oop\Framework;

use Kamil\Oop\Controllers\HomePageController;
use Kamil\Oop\Controllers\InputPageController;
use Kamil\Oop\Controllers\OutputPageController;
use Kamil\Oop\Repository\DataRepository;

class Router
{
    private HomePageController $homePageController;
    private InputPageController $inputPageController;
    private OutputPageController $outputPageController;

    public function __construct(
        HomePageController $homePageController,
        InputPageController $inputPageController,
        OutputPageController $outputPageController)
    {
         $this->homePageController = $homePageController;
         $this->inputPageController = $inputPageController;
         $this->outputPageController = $outputPageController;
    }

    public function process(string $route, array $request = null) {

        switch ($route) {
            case '/':
                $this->homePageController->RenderHomePage();
                break;

            case '/apskaita':
                $this->inputPageController->getInputPage();
                break;
            case '/rezultatai':
                $this->outputPageController->getOutputs();
                break;
            default:
                $this->homePageController->renderNotFoundPage();
                break;
        }

    }
}