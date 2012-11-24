<table class="table table-striped">
	<th><input type="checkbox" id="deleteID" name="deleteID[]" value="0"></th>
	<th>Call id</th>
	<th>Supplier name</th>
	<th>Company name</th>
	<th>Date</th>
	{section name=callIndex loop=$searchResult}
	 <tr>
	 	<td><input type="checkbox" id="deleteID" name="deleteID[]" value=""></td>
	 	<td>{$searchResult[callIndex].call_id}</td>
	 	<td>{$searchResult[callIndex].supplier_name}</td>
	 	<td>{$searchResult[callIndex].company_name}</td>
	 	<td>{$searchResult[callIndex].creation_date}</td>
	 </tr>
	{/section}
</table>