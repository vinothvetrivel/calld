<form id="deleteCallId" name="deleteCallId">
	<center><input type="button" id="deleteSubmit" name="deleteSubmit" value="Delete" onclick="deleteMyCall(this.form)" class="btn btn-primary"/></center>
	<br>
	<table class="table table-striped">
		<th><input type="checkbox" id="deleteID" name="deleteID[]" value="0" onclick="selectAllId('deleteID')"></th>
		<th>S.No</th>
		<th>Call id</th>
		<th>Supplier name</th>
		<th>Company name</th>
		<th>Date</th>
		{assign var='count' value=1}
		{section name=callIndex loop=$searchResult}
		 <tr>
		 	<td><input type="checkbox" id="deleteID" name="deleteID[]" onclick="unSelectAllId('deleteID')" value="{$searchResult[callIndex].call_id}"></td>
		 	<td>{$count}</td>
		 	<td>{$searchResult[callIndex].call_id}</td>
		 	<td>{$searchResult[callIndex].supplier_name}</td>
		 	<td>{$searchResult[callIndex].company_name}</td>
		 	<td>{$searchResult[callIndex].creation_date}</td>
		 </tr>
		 {assign var='count' value=$count+1}
		{/section}
	</table>
</form>	