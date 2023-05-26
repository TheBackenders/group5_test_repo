<?php 
namespace app\database;

class Connection{
private $db_info;
	function __construct(){
		
		$this->db_info=require  __DIR__. '\..\..\config.php';

		
	}


	function getConnection(){
		
		$conn = mysqli_connect($this->db_info['host'],$this->db_info['username'],$this->db_info['password'],$this->db_info['db']);
		if($conn->connect_error){
			die("Connection Faild: ". $conn->connect_error);
		}
		return $conn;
	}

}


?>