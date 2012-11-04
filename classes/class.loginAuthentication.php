<?php
	class loginAuthentication
		{
			var $username;
			var $password;  
			var $emailId;
			var $connection;
			var $userId;
			
			function loginAuthentication()
				{
					$this->username='';
					$this->password='';
					$this->emailId='';
					$this->userId=0;
				}
			function insertUser()
				{
					$this->username=mysql_escape_string($this->username);
					$this->password=mysql_escape_string($this->password);
					$this->emailId=mysql_escape_string($this->emailId);
					$connection = new dbConnection;
					$connection->connectDatabase();
					$sql="insert into cms_user('$this->userId','$this->username','$this->password','$this->emailId')";
					mysql_query($sql);
					$this->userId=mysql_insert_id();
					return $this->userId;
				}
			function selectUser()
				{
					$sql ="select * from cms_user ";
					$condition ="where ";
					if($this->username!='')
						{
					 		$sql=$sql.$condition."username='$this->username'";
					 		$condition=" AND ";
					 	}
					if($this->password!='')
						{
							$sql=$sql.$condition."password='$this->password'";
					 		$condition=" AND ";
						}
					$sql=$sql.";";
					$connection = new dbConnection;
					$connection->connectDatabase();
					$result=mysql_query($sql);
					$row=mysql_fetch_assoc($result);
					if($row==true)
						{
							$this->userId = $row['user_id'];
							$this->username = $row['username'];
							$this->emailId =$row['email_id'];
							$this->password = $row['password'];
							return true;
						}
					return false;
				}
		}
?>
