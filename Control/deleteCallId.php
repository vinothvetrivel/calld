<?php
	function deleteCallId($formname)
		{
			$responseObj = new xajaxResponse();
			$addCallDetails = new addCallDetails;
			$deleteCheck=$formname['deleteID'];
			if(($deleteCheck[0]==0) &&($deleteCheck[0]!=""))
			{
				$addCallDetails->userId=$_SESSION['userId'];
				$addCallDetails->deleteCallDetails();
			}
			else if($deleteCheck[0]!=0)
			{	 
				foreach($deleteCheck as $delete)
					{
						 
						$addCallDetails->callId=$delete;
						$addCallDetails->userId=$_SESSION['userId'];
						$result=$addCallDetails->deleteCallDetails();
					}
			}
			else
				{
				 	$responseObj->alert("Please select the call to delete");
				}
			return $responseObj;
		}
?>