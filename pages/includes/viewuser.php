<?php

namespace pages\includes;

use User;

class viewUser extends User
{
    protected function showAllUsers()
    {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo $data['uid'] . "<br>";
            echo $data['pwd'] . "<br>";

        }

    }
}