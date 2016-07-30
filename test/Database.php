<?php 
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;
class initLoad extends TestCase
{
    function testConnection()
    {   
        $db_host        = '127.0.0.1';
        $db_port        = 3306;
        $db_socket      = '';
        $db_name        = 'slims9';
        $db_username    = 'root';
        $db_passwd      = '';

        $conn           = new Simbio\Database\Mysql\SimbioMysql($db_host, $db_username, $db_passwd, $db_name);
        return $this->assertEmpty($conn->connect());
    }    
}