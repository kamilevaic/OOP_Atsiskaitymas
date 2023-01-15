<?php

namespace Kamil\Oop\Controllers;
use Kamil\Oop\Repository\DataRepository;
use Kamil\Oop\Service\TaskService;


class OutputPageController
{
    private DataRepository $dataRepository;

    public function __construct(
        DataRepository $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }

    public function getOutputs()
    {

      $bills= $this->dataRepository->getDataFromJson();

      $smarty = new \Smarty();
      $smarty->assign(['bills'=>$bills]);
      $smarty->display(__DIR__ . './../Views/Output.tpl');

    }
}