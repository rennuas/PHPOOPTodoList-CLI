<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("abdul");
addTodoList("shamad");
addTodoList("rennu");

showTodoList();

addTodoList("agung");

showTodoList();
