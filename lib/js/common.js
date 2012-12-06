function selectAllId(fieldID)
	{
		var select =document.getElementsByName(fieldID+"[]");
		var i=0;
		if((select[0].checked)==true)
			{
				 for(i=1;i<(select.length);i++)
				 	{
				 		select[i].checked=true;
				 	}
			}
		else
			{
				 
				for(i=1;i<(select.length);i++)
				 	{
				 		 
				 		select[i].checked=false;
				 	}
			}
	 }
function unSelectAllId(fieldID)
	{
		var select =document.getElementsByName(fieldID+"[]");
		var i=0;
		for(i=1;i<(select.length);i++)
		 	{
		 		 
		 		if((select[i].checked)==false)
		 		{
		 			select[0].checked=false;
		 		}
		 	}
	}
function trim( value ) 
	{
		return LTrim(RTrim(value));
	}
	
function LTrim( value ) 
	{
		var re = /\s*((\S+\s*)*)/;
		return value.replace(re, "$1");
	}
 
function RTrim( value ) 
	{
		var re = /((\s*\S+)*)\s*/;
		return value.replace(re, "$1");
	}
