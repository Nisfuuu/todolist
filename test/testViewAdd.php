<?php

require_once "../Model/tolis.php";
require_once "../view/viewAdd.php";
require_once "../bisnis.logic/show.php";
require_once "../bisnis.logic/addTodoList.php";

addTodoList("eko");
addTodoList("kurniatiot");
addTodoList("kaneddy");

viewAddTodoList();

showTodoList();
