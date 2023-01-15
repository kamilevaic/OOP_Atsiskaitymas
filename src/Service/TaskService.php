<?php

namespace Kamil\Oop\Service;

use Kamil\Oop\Repository\DataRepository;


class TaskService
{
    private DataRepository $dataRepository;

    public function __construct(
        DataRepository $dataRepository
    )
    {
        $this->dataRepository = $dataRepository;
    }

    public function validateDatatoJson(array $request){
        if(!isset($request['input'])|| empty($request['input'])){
            throw new \Exception('input not valid');
        }
        if(!isset($request['rate'])|| empty($request['rate'])){
            throw new \Exception('rate not valid ');
        }
        if(!isset($request['tariff'])|| empty($request['tariff'])){
            throw new \Exception('tariff not valid ');
        }
        if(!isset($request['month'])|| empty($request['month'])){
            throw new \Exception('month not valid ');
        }

        $this->dataRepository->saveDataToJson();
    }


}