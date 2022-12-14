<?php

require_once "../Model/tolis.php";
require_once  "../bisnis.logic/remove.php";
require_once "../bisnis.logic/addTodoList.php";
require_once "../bisnis.logic/show.php";

addTodoList("eko");
addTodoList("adi");
addTodoList("mie");
addTodoList("api");
addTodoList("uci");

showTodolist();

removeTodoList(3);

showTodolist();

removeTodoList(2);

showTodoList();

removeTodoList(4);

showTodoList();

$success = removeTodoList(4);
var_dump($success);
