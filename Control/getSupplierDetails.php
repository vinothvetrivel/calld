<?php
	function getSupplierDetails($formname)
		{
			$responseObj = new xajaxResponse();
			$supplierDetails = new supplierDetails;
			$supplierDetails->supplierId = $formname['supplierId'];
			if($supplierDetails->selectSupplierDetails())
				{
					$smarty = new Smarty;
					$smarty->assign("supplierId",$supplierDetails->supplierId);
					$smarty->assign("supplierName",$supplierDetails->supplierName);
					$smarty->assign("companyName",$supplierDetails->companyName);
					$smarty->assign("companyAddress",$supplierDetails->companyAddress);
					$smarty->assign("companyMobile",$supplierDetails->companyMobile);
					$smarty->assign("supplierEmailId",$supplierDetails->supplierEmailId);
					$template=$smarty->fetch("supplierDetails.tpl");
					$responseObj->assign("div2","innerHTML",$template);	
				}
			else
				{
					$responseObj->alert("Invalid supplier id");
				}
			return $responseObj;
		}
?>
