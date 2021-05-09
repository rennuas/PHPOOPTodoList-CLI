<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList()
{

    $repository = new TodoListRepositoryImpl();
    $service = new TodoListServiceImpl($repository);

    $service->showTodoList();
}

function testAddTodoList()
{

    $repository = new TodoListRepositoryImpl();
    $service = new TodoListServiceImpl($repository);

    $service->showTodoList();

    $service->addTodoList("rennu");
    $service->addTodoList("kamu");

    $service->showTodoList();
}

function tesRemoveTodoList()
{

    $repository = new TodoListRepositoryImpl();
    $service = new TodoListServiceImpl($repository);

    $service->showTodoList();

    $service->addTodoList("rennu");
    $service->addTodoList("kamu");

    $service->showTodoList();

    $service->removeTodoList(2);

    $service->showTodoList();
}

tesRemoveTodoList();
