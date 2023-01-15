<?php

namespace Kamil\Oop\Container;

use Kamil\Oop\Controllers\HomePageController;
use Kamil\Oop\Controllers\InputPageController;
use Kamil\Oop\Controllers\OutputPageController;
use Kamil\Oop\Repository\DataRepository;
use Kamil\Oop\Framework\Router;
use Kamil\Oop\Service\TaskService;
use RuntimeException;

class DIContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . ' not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }

    public function loadDependencies()
    {

        $this->set(
            Router::class,
            function (DIContainer $container) {
                return new Router(
                    $container->get(HomePageController::class),
                    $container->get(InputPageController::class),
                    $container->get(OutputPageController::class)
                );
            }
        );

        $this->set(
           HomePageController::class,
            function (DIContainer $container){
               return new HomePageController();
            }
        );

        $this->set(
            InputPageController::class,
            function (DIContainer $container) {
                return new InputPageController(
                    $container->get(DataRepository::class),
                    $container->get(TaskService::class)
                );
            }
        );

        $this->set(
            OutputPageController::class,
            function (DIContainer $container) {
                return new OutputPageController(
                    $container->get(DataRepository::class)
                );
            }
        );

        $this->set(
            DataRepository::class,
            function (DIContainer $container){
                return new DataRepository();
            }
        );
        $this->set(
            TaskService::class,
            function (DIContainer $container) {
                return new TaskService(
                    $container->get(DataRepository::class)
                );
            }
        );


    }
}