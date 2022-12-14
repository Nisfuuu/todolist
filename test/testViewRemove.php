<?php
require_once "../Model/tolis.php";
require_once "../view/viewRemove.php";
require_once "../bisnis.logic/addTodoList.php";
require_once "../bisnis.logic/show.php";

addTodoList("eka");
addTodoList("pdi");
addTodoList("log");
addTodoList("adit");
addTodoList("sendi");
addTodoList("ole");

showTodoList();

viewRemove();

showTodoList();
