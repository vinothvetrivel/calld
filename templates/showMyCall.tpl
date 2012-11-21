<table class="table table-striped">
	<th>Call id</th>
	<th>Supplier name</th>
	<th>Company name</th>
	<th>Date</th>
	{section name=callIndex loop=$searchResult}
	 <tr>
	 	<td>{$searchResult[callIndex].call_id}</td>
	 	<td>{$searchResult[callIndex].supplier_name}</td>
	 	<td>{$searchResult[callIndex].company_name}</td>
	 	<td>{$searchResult[callIndex].creation_date}</td>
	 </tr>
	{/section}
</table>