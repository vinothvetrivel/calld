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
?>
