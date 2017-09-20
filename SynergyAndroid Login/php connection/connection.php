<?php
/**
 * Created by PhpStorm.
 * User: Riley
 * Date: 18/09/2017
 * Time: 8:39 PM
 */


require_once 'config.php';

class db_connection
{
    private $connect;

    /**
     * db_connection constructor.
     */
    function __construct()
    {
        $this->connect = mysqli_connect(hostname, username, password, db_name) or die("DB connection issue");

    }

    public function get_connection()
    {
        return $this->connect;

    }
}


?>

