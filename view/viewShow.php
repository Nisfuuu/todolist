<?php

require_once __DIR__ . "/../Model/tolis.php";
require_once __DIR__ . "/../bisnis.logic/show.php";
require_once __DIR__ . "/../view/viewAdd.php";
require_once __DIR__ . "/../view/viewRemove.php";
require_once __DIR__ . "/../helper/input.php";


function viewShow()
{
    while (true) {
        showTodoList();

        echo "Menu\ntambah\n1. Tambah Todo\n2. Hapus todo\nx. Keluar";

        $pilihan = input('Pilih');

        if ($pilihan == '1') {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemove();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "pilihan tidak dimengerti";
        }
    }
    echo "sampai jumpa lagi\n";
}
