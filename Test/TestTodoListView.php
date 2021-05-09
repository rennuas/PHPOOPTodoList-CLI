<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testShowTodoListView()
{
    $repository = new TodoListRepositoryImpl();
    $service = new TodoListServiceImpl($repository);
    $view = new TodoListView($service);
    $view->showTodoList();
}

function testAddTodoListView()
{
    $repository = new TodoListRepositoryImpl();
    $service = new TodoListServiceImpl($repository);
    $view = new TodoListView($service);

    $view->addTodoList();

    $service->showTodoList();

    $view->addTodoList();

    $service->showTodoList();
}

function testRemoveTodoListView()
{
    $repository = new TodoListRepositoryImpl();
    $service = new TodoListServiceImpl($repository);
    $view = new TodoListView($service);

    $view->addTodoList();

    $service->showTodoList();

    $view->addTodoList();

    $service->showTodoList();

    $view->removeTodoList();

    $service->showTodoList();

    $view->removeTodoList();

    $service->showTodoList();
}


testRemoveTodoListView();
