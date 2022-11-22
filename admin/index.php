<?php


require_once '../db/DB.php';
$db = DB::getInstance();

if (isset($_GET['user_id']) && $_GET['user_id'] && is_int($_GET['user_id'])) {
    $user = $db->pdo->where('id', (int)$_GET['user_id'])->getOne('users');
    if ($user) {
        print_r($user);
    } else {
        echo 'User not found';
    }
} else {
    echo 'User id not given in ';
}
