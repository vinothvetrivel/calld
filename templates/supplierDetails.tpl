<form id="supplierDetails" name="supplierDetails" class="form-search">
	<center><h3>Supplier Details</h3></center>
		<input type="hidden" id="supplierId" name="supplierId" value="{$supplierId}"/>
		<input type="hidden" id="supplierName" name="supplierName" value="{$supplierName}" readonly/>
		<input type="hidden" id="companyName" name="companyName" value="{$companyName}" readonly/>
		<input type="hidden" id="companyMobile" name="companyMoblie" value="{$companyMobile}" readonly/>
		<input type="hidden" id="companyAddress" name="companyAddress" value="{$companyAddress}" readonly/>
		<input type="hidden" id="supplierEmailid" name="supplierEmailId" value="{$supplierEmailId}" readonly/>
<table class="table table-striped">
	<tr>
		<td><b>Supplier id</b></td>
		<td><b>Supplier name</b></td>
		<td><b>Company name</b></td>
	</tr>
	<tr>
		<td>{$supplierId}</td>
		<td>{$supplierName}</td>
		<td>{$companyName}</td>
	</tr>
	<tr>
		<td><b>Address</b></td>
		<td><b>Contact no</b></td>
		<td><b>Email id</b></td>
	</tr>
	<tr>
		<td>{$companyAddress}</td>
		<td>{$companyMobile}</td>
		<td>{$supplierEmailId}</td>
	</tr>
	<tr>
		<td>
			<b>Description</b>
		</td>
		<td>
			<textarea rows="5" cols="200" id="description" name="description"></textarea>
		</td>
		<td> </td>
	</tr>
</table>
	<center><input type="button" id="callSubmit" name="callSubmit" value="submit" class="btn btn-primary" onclick="addCallDetails(this.form)"/></center>
</form>