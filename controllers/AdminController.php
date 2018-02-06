<?php
/**
 * Created by PhpStorm.
 * User: vkolesnikov
 * Date: 01.02.2018
 * Time: 9:47
 */

class AdminController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
}