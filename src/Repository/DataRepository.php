<?php

namespace Kamil\Oop\Repository;

class DataRepository
{
    public function saveDataToJson(){
            $dataArray = json_decode(file_get_contents(__DIR__ . './../Files/data.json'), true);
            $dataArray[] = $_POST;
            file_put_contents(__DIR__ . './../Files/data.json', json_encode($dataArray));
//            echo print_r($dataArray);
//            die();
    }

    public function getDataFromJson(){

        $data = json_decode(file_get_contents(__DIR__ . './../Files/data.json' ) , true);
        return $data;

    }
}