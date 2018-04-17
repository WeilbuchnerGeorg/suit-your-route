<?php

class UserModel
{
    public static function getUserByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM user WHERE id=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $userArray = array();

            while($row = $db->fetchObject($result))
            {
                $userArray[] = $row;
            }

            return $userArray;
        }

        return null;
    }


    public static function saveUser($data)
    {
        $db = new Database();

        $sql = "UPDATE user SET firstname='".$db->escapeString($data['firstname'])."',lastname='".$db->escapeString($data['lastname'])."',street='".$db->escapeString($data['street'])."',zip='".$db->escapeString($data['zip'])."',city='".$db->escapeString($data['city'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

}