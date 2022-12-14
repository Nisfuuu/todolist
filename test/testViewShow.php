<?php
require_once "../view/viewShow.php";
require_once "../bisnis.logic/addTodoList.php";

addTodoList('eko');
addTodoList('kurniawan');
addTodoList('kaneddy');
addTodoList('progermer');
addTodoList('naw');


viewShow();
