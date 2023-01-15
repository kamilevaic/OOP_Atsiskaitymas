<?php

namespace Kamil\Oop\Controllers;

use Kamil\Oop\Repository\DataRepository;
use Kamil\Oop\Service\TaskService;

class InputPageController
{
    private DataRepository $dataRepository;
    private TaskService $taskService;

    public function __construct(
        DataRepository $dataRepository,
        TaskService $taskService)
    {
        $this->dataRepository = $dataRepository;
        $this->taskService= $taskService;
    }

    public function getInputPage():void
    {
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . './../Views/input.tpl');

    }

    public function createInput(array $request){

        $this->taskService->validateDatatoJson($request);

        $this->dataRepository->saveDataToJson();
    }

//


}