<?php

// menambah TodoList

function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}
