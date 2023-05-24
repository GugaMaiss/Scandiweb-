<?php

class dbh
{
    protected function connect(): mysqli
    {
        $servername = 'localhost';
        $username = 'root';
        $password = "";
        $dbname = "testproject";

        return new mysqli($servername, $username, $password,
            $dbname);
    }

}