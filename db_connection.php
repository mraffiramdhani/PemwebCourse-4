<?php

	class DBConnection{
		private $server = "localhost";
		private $user = "root";
		private $pass = "";
		private $dbname = "pemweb";

		public function connect(){
			$con = mysqli_connect($this->server,$this->user,$this->pass,$this->dbname);
			return $con;
		}
	}

?>