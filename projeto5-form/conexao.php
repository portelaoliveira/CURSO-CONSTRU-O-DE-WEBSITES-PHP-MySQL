<?php

$conection = mysqli_connect("localhost", "root", "", "registro");
	class db {
		public function conecta_mysql() {
			$conection = mysqli_connect("localhost", "root", "", "registro");
			return $conection;
		}
	}

?>