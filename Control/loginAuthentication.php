<?php
	session_start();
	function loginAuthentication($formname)
		{
			$responseObj = new xajaxResponse();
			$username=$formname['username'];
			$password=$formname['password'];
			$login = new loginAuthentication;
			$login->username = $username;
			$login->password = $password;
			if($login->selectUser())
				{
					$responseObj->alert("Login successfull");
					$_SESSION['userId']=$login->userId;
					$_SESSION['username']=$login->username;
					$_SESSION['emailId']=$login->emailId;
					$responseObj->redirect("main.php");
				}
			else
				{
					$responseObj->alert("Username and Password are not match");
				}
			return $responseObj;
		}
?>
