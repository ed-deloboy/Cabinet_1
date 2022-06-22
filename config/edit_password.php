<?php

// echo 1;

$oldPass = trim($_POST['oldPassword']);
$newPassword1 = trim($_POST['newPassword']);
$newPassword2 = trim($_POST['newPassword2']);

if ($oldPass == '') {
    // поле старого пароля пустое
    echo 2;
}

if ($newPassword1 == '') {
    // поле нового пароля пустое
    echo 3;
}

if ($newPassword2 == '') {
    // поле нового 2 пароля пустое
    echo 4;
}

if ($oldPass != '' and $newPassword1 != '' and $newPassword2 != '') {
    if ($newPassword1 != $newPassword2) {
        // Новые пароли не совпадают
        echo 1;
    } else {
        echo 7;
    }
}
