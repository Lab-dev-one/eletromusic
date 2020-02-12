<?php 
Class DB{
	private static $conn;
	static function getConn(){
	if(is_null(self::$conn)) {
		  self::$conn = new PDO('mysql:host=localhost;dbname=bd_musica2' ,'root', '');
		  #self::$conn = new PDO('mysql:host=mysql.uhserver.com;dbname=bd_musica2' ,'bancomusica', 'Icoders@1999');
		  self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	return self::$conn;
	}
}
