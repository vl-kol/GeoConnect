<?php
/**
 * Created by PhpStorm.
 * User: vkolesnikov
 * Date: 01.02.2018
 * Time: 9:52
 */

abstract class AdminBase
{
    public static function checkAdmin()
    {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        if($user['role'] == 'admin') {
            return true;
        }
        die('У вас недостаточно прав для данного действия');
    }
}