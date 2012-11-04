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