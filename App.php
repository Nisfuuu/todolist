<?php

require_once __DIR__ . "/Model/tolis.php";
require_once __DIR__ . "/bisnis.logic/show.php";
require_once __DIR__ . "/bisnis.logic/addTodoList.php";
require_once __DIR__ . "/bisnis.logic/remove.php";
require_once __DIR__ . "/view/viewShow.php";
require_once __DIR__ . "/view/viewAdd.php";
require_once __DIR__ . "/view/viewRemove.php";
require_once __DIR__ . "/helper/input.php";


echo "Aplikasi Todo list" . PHP_EOL;

viewShow();
