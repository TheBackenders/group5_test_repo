<?php
namespace app\models;
require_once  __DIR__. '\..\database\connection.php';
use app\database\Connection;
class Family
{
public int $id;
public  $first_name;
public  $mid_name;
public  $last_name;
public  $emp;
public  $num_family;
public  $phon;

public $connection;

public function __construct()
{           
    $db = new Connection();
    $this->connection =  $db->getConnection();
}
}

?>