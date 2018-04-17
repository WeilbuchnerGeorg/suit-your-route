<?php

class TourModel
{
    public static function getTour()
    {
        $db = new Database();

        $sql = "SELECT * FROM tour";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $toursArray = array();

            while($row = $db->fetchObject($result))
            {
                $toursArray[] = $row;
            }

            return $toursArray;
        }

        return null;
    }
    public static function getTourById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM tour WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getTourByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM tour WHERE userId=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $toursArray = array();

            while($row = $db->fetchObject($result))
            {
                $toursArray[] = $row;
            }

            return $toursArray;
        }

        return null;
    }

    public static function createNewTour($data)
    {
        $db = new Database();

        $sql = "INSERT INTO tour(name,description,date,duration,startlocation,image,userid,regionid,difficultyid,ratingid,activityid) VALUES('".$db->escapeString($data['userId'])."','".$db->escapeString($data['firstname'])."','".$db->escapeString($data['lastname'])."','".$db->escapeString($data['street'])."','".$db->escapeString($data['zip'])."','".$db->escapeString($data['city'])."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveTour($data)
    {
        $db = new Database();

        $sql = "UPDATE tour SET firstname='".$db->escapeString($data['firstname'])."',lastname='".$db->escapeString($data['lastname'])."',street='".$db->escapeString($data['street'])."',zip='".$db->escapeString($data['zip'])."',city='".$db->escapeString($data['city'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    public static function deleteTour($id)
    {
        $db = new Database();

        $sql = "DELETE FROM tour WHERE id=".intval($id);
        $db->query($sql);
    }
}