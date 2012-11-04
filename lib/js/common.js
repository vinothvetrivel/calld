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
