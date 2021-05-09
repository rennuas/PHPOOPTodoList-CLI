<?php

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";
require_once __DIR__ . "/Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

$repository = new TodoListRepositoryImpl();
$service = new TodoListServiceImpl($repository);
$view = new TodoListView($service);

$view->showTodoList();
