<?php
require_once "../Model/tolis.php";
require_once "../bisnis.logic/addTodoList.php";

addTodoList("eko");
addTodoList("kurniawan");
addTodoList("hem");

var_dump($todoList);
