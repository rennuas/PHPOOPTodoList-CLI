<?php

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

addTodoList("abdul");
addTodoList("shamad");
addTodoList("rennu");

showTodoList();

viewRemoveTodoList();

showTodoList();

viewRemoveTodoList();

showTodoList();
