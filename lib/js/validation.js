function formValidation(formname)
	{
		 if(trim(formname.username.value)=='')
		 	{
		 		alert("Please enter username");
		 		return false;
		 	}
		if(trim(formname.password.value)=='')
		 	{
		 		alert("Please enter password");
		 		return false;
		 	}
		 xajax_loginAuthentication(xajax.getFormValues(formname));
	}
function supplierIdValidation(formname)
	{
		if(trim(formname.supplierId.value)=='')
			{
				alert("Please enter supplier id");
				return false;
			}
			xajax_getSupplierDetails(xajax.getFormValues(formname));
	}
function addCallDetails(formname)
	{
		if(formname.description.value=="")
			{
				alert("Please enter description");
				return false;
			}
		xajax_addSupplierDetails(xajax.getFormValues(formname));	
	}
function deleteMyCall(formname)
	{
		var select =document.getElementsByName("deleteID[]");
		var i=0;
		var flag=0;
		for(i=0;i<(select.length);i++)
		 	{
		 		 
		 		if((select[i].checked)==true)
		 		{
		 			flag=1;
		 		}
		 	}
		if(flag==1)
			{
				xajax_deleteCallId(xajax.getFormValues(formname));	
			}
		else
			{
				alert("Please select the id to delete");
			}
	}
	