<?php


// menampilkan to do list
function showTodoList()
{
    global $todoList;

    echo "TOODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value " . PHP_EOL;
    }
}
