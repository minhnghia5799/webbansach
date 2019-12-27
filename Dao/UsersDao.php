<?php

require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/Users.php";
 
class UsersDao extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByUserName($UserName)
    {
        $result = $this->runQuery(" SELECT * FROM users WHERE userName = '{$UserName}' ");
        $row = $result->fetch_assoc();
        return new Users(
            $row['userName'],
            $row['pass'],
            $row['email'],
            $row['name'],
            $row['province'],
            $row['address'],
            $row['phoneNumber']
        );

    }

    public function getAllUsers()
    {
        $result = $this->runQuery(" SELECT * from users ");
        $UsersList = array();
        while ($row = $result->fetch_assoc())
        {
            $Users= new Users(
            $row['userName'],
            $row['pass'],
            $row['email'],
            $row['name'],
            $row['province'],
            $row['address'],
            $row['phoneNumber']
            );
            array_push($UsersList, $Users);
        }
        $result->free();
        return $UsersList;
    }

    public function insertUsers($Users)
    {
        return $this->runQuery(
            "INSERT INTO users(userName,pass,email,name,province,address,phoneNumber)
            value (
                
                '{$Users->getUserName()}',
                
                '{$Users->getPass()}',
                '{$Users->getEmail()},
                '{$Users->getName()}',
                '{$Users->getProvince()}',
                '{$Users->getAddress()}',
                '{$Users->getPhoneNumber()}'
            )"
        );
    }

    public function insertUsers2($un, $pw)
    {
        return $this->runQuery(
            "INSERT INTO users(userName,pass,email,name,province,address,phoneNumber)
            value (
                '$un',
                '$pw',
                '',
                '',
                '',
                '',
                ''
            )"
        );
    }

    public function updateUsers($Users)
    {
        return $this->runQuery(
            "UPDATE users
                SET 
                    pass='{$Users->getPass()}',
                    email='{$Users->getEmail()},
                    name='{$Users->getName()}',
                    province='{$Users->getProvince()}',
                    address='{$Users->getAddress()}',
                    phoneNumber='{$Users->getPhoneNumber()}'
                WHERE userName='{$Users->getUserName()}'"
        );
    }

    public function deleteUsers($UserName)
    {
        $this->runQuery("DELETE FROM users WHERE userName={$UserName}");
    }

}

?>