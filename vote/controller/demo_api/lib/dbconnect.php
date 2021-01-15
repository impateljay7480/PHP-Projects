<?php
class dbconnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","root","impateljay","e_vote");
				return $connection;
    }
}
?>