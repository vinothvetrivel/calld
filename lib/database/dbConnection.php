<?php
	class dbConnection
		{
			var $host="localhost";
			var $databaseUsername="root";
			var $databasePassword="root";
			var $databaseName="CMS";
			var $connection;
			
			function connectDatabase()	
				{
					$this->connection=mysql_connect($this->host,$this->databaseUsername,$this->databasePassword) or die("not working");
					mysql_select_db($this->databaseName,$this->connection);
				}
		}
?>
