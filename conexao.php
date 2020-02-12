<?php 
	 class conexao{

		private static $conn;
		
		static function getConn(){
			if(is_null(self::$conn)){
				self::$conn = new PDO('mysql:host=localhost;dbname=petsgobd','root','');
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			return self::$conn;
		}
	}
?>