<?php

namespace pages\includes;

class User extends dbh
{
    protected function getAllUsers()
    {
        $data = [];
        $sql = "SELECT * FROM user";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = $row;
            }
            return $data;
        }
    }

}