<?php
	function newCall()
		{
			$responseObj = new xajaxResponse();
			$smarty = new Smarty;
			$responseObj->assign("div2","innerHTML","");
			$template=$smarty->fetch("enterSuplier.tpl");
			$responseObj->assign("div1","innerHTML",$template);
			//$responseObj->alert("new call");
			return $responseObj;
		}
	function showCall()
		{
			$responseObj = new xajaxResponse();
			$smarty = new Smarty;
			$connection = new dbConnection;
			$connection->connectDatabase();
			$sql="select cd.call_id, sd.supplier_name, sd.company_name, cd.creation_date from call_details as cd, supplier as sd where cd.supplier_id=sd.supplier_id AND user_id =".$_SESSION['userId'].";";
			$result=mysql_query($sql);
			while($row=mysql_fetch_assoc($result))
			{
				$data[]=$row;
			}
			//print_r($data);
			$smarty->assign("searchResult",$data);
			$responseObj->assign("div2","innerHTML","");
			$template=$smarty->fetch("showMyCall.tpl");
			$responseObj->assign("div1","innerHTML",$template);
			//$responseObj->alert("show call");
			return $responseObj;
		}
?>
