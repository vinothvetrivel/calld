<?php
	class addCallDetails
		{
			var $callId;
			var $supplierId;
			var $userId;
			var $description;
			var $creationDate;
			function addCallDetails()
				{
					$this->callId=0;
					$this->supplierId=0;
					$this->userId=0;
					$this->description="";
					$this->creationDate="0000-00-00 00:00:00";
					$this->updateDate="0000-00-00 00:00:00";
				}
			function insertCallDetails()
				{
					$this->description=mysql_escape_string($this->description);
					$connection = new dbConnection;
					$connection->connectDatabase();
					$sql="insert into call_details values('','$this->supplierId','$this->userId','$this->description','$this->creationDate','$this->updateDate')";
					mysql_query($sql);
					$this->callId=mysql_insert_id();
					return $this->callId;
				}
			function deleteCallDetails()
				{
					$connection = new dbConnection;
					$connection->connectDatabase();
					$sql="delete from call_details where";
					$condition = " ";
					if($this->callId!=0)
					{
						$sql=$sql.$condition."call_id='$this->callId'";
						$condition = " AND ";
					}
					if($this->userId!=0)
					{
						$sql=$sql.$condition."user_id='$this->userId'";
					}
					
					mysql_query($sql);
				}
		}
?>