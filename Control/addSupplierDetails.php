<?php
	function addSupplierDetails($formname)
		{
			$responseObj = new xajaxResponse();
			$addCallDetails = new addCallDetails;
			$addCallDetails->supplierId=$formname['supplierId'];
			$addCallDetails->userId=$_SESSION['userId'];
			$addCallDetails->description=$formname['description'];
			$addCallDetails->creationDate=date("Y-m-d H:m:s");
			$addCallDetails->updateDate=date("Y-m-d H:m:s");
			$callId = $addCallDetails->insertCallDetails();
			$message = "<h2>Call reference id is $callId</h2>";
			$responseObj->assign("div1","innerHTML","");
			$responseObj->assign("div2","innerHTML",$message);
			return $responseObj;
		}
?>