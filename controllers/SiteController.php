<?php

class SiteController
{

	public function actionIndex()
		{
		    $categories = [];
            $categories = Category::getCategoriesList();

            $latestProducts = [];
            $latestProducts = Product::getLatestProducts(6);

            $sliderProducts = [];
            $sliderProducts = Product::getRecommendedProducts();

		    require_once(ROOT.'/views/site/index.php');

            return true;
		}

    public function actionContact() {

	    $userEmail = '';
	    $userText = '';
	    $result = false;

	    if(isset($_POST['submit'])) {
	        $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            if(!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if($errors == false) {
                $adminEmail = 'vkolesnikov91@mail.ru';
	            $subject = 'Тема письма';
	            $message = "Текст: {$userText}. от {$userEmail}";
	            $result = mail($adminEmail, $subject, $message);
	            $result = true;
            }
	    }

    }

}
