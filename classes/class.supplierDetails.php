<?php
	class supplierDetails
		{
			var $supplierId;
			var $supplierName;
			var $companyName;
			var $companyAddress;
			var $companyMobile;
			var $supplierEmailId;

			function supplierDetails()
				{
					$this->supplierId = 0;
					$this->companyName = "";
					$this->companyAddress = "";
					$this->companyMobile = 0;
					$this->supplierEmailId = "";
				}
			function selectSupplierDetails()
				{
					$connection = new dbConnection;
					$connection->connectDatabase();
					$sql = "select * from supplier ";
					$condition ="where ";
					if($this->supplierId!=0)
						{
					 		$sql=$sql.$condition."supplier_id='$this->supplierId'";
					 		$condition=" AND ";
					 	}
					$sql=$sql.";";
					$result=mysql_query($sql);
					$row=mysql_fetch_assoc($result);
					if($row==true)
						{
							$this->supplierId = $row['supplier_id'];
							$this->supplierName = $row['supplier_name'];
							$this->companyName = $row['company_name'];
							$this->companyAddress = $row['company_address'];
							$this->companyMobile = $row['company_mobile'];
							$this->supplierEmailId = $row['supplier_email_id'];
							return true;
						}
					return false;
				}
		}
?>