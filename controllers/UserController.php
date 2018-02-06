<?php
/**
 * Created by PhpStorm.
 * User: vkolesnikov
 * Date: 29.01.2018
 * Time: 11:04
 */

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Введите имя';
            }

            if(!User::checkEmail($email)) {
                $errors[] = 'Введите корректный адрес почты';
            }

            if(!User::checkPassword($password)) {
                $errors[] = 'Пароль должен содержать не менее 6 символов';
            }

            if(User::checkEmailExists($email)) {
                $errors[] = 'Такой адрес почты уже используется';
            }

            if($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once (ROOT.'/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';
        $result = false;

        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильно введен email адрес';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не может быть менее 6 символов';
            }


            $userId = User::checkUserData($email, $password);

            if($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {

                User::auth($userId);

                header("Location: /cabinet/");
            }
        }

        require_once(ROOT. '/views/user/login.php');

        return true;
    }

    public function actionLogout() {

        unset($_SESSION['user']);
        header("Location: /");
    }

}