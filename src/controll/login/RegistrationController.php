<?php
namespace hive2\controll\login;
use hive2\views\View;
use hive2\models\User;
use hive2\controll\DBActions;

/**
 *
 */
class RegistrationController
{

  public function ActionRegistrate()
    {
  		if(isset($_POST['firstName'])) {
  			$view = new View();
  			$db = new DBActions();

  			$name = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
  			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  			$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        if ($name == "" || $email == "" || $password == "") {
          $msg = "please fill all fields";
  				$conn=null;
  				print($view->render("register", ["error" => $msg]));
        }
  			$password = password_hash($password, PASSWORD_BCRYPT);

  			$result = $db->insertUser($name, $password, $email);
  			if ($result == 0) {
  				$msg = "$email is already exists";
  				$conn=null;
  				print($view->render("register", ["error" => $msg]));
  			} else {
  				$msg = "regestration completed by $name";
  				$conn=null;
  				print($view->render("index", ["error" => $msg]));
  			}

  		}
  	}
}