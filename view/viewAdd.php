<?php

require_once __DIR__ . "/../Model/tolis.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../bisnis.logic/addTodoList.php";

function viewAddTodoList()
{
    echo "menambah todo\n";

    $todo = input("todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal Menambah Todo\n";
    } else {
        addTodoList($todo);
    }
}
