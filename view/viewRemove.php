<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../bisnis.logic/remove.php";

function viewRemove()
{
    echo "MENGHAPUS TODO\n";

    $pilihan = input("nomer (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus Todo";
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "sukses menghapus todo nomer $pilihan \n";
        } else {
            echo "gagal menghapus todo nomer $pilihan\n";
        }
    }
}
