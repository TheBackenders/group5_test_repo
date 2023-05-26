<?php
namespace app\palces;

require_once  __DIR__. '\..\database\connection.php';
use app\database\Connection;

class Place{
    public $name;
    public $connection;

public function __construct()
{           
    $db = new Connection();
    $this->connection =  $db->getConnection();
}
}
?>