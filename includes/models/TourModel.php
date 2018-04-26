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

    public static function getToursByRegion($regionId)
    {
        $db = new Database();
        $sql = "SELECT * FROM tour WHERE regionid=".intval($regionId);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $tours = array();

            while($row = $db->fetchObject($result))
            {
                $tours[] = $row;
            }

            return $tours;
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

        $sql = "INSERT INTO tour(name,description,date,duration,startlocation,image,userid,regionid,difficultyid,ratingid,activityid) VALUES('".$db->escapeString($data['name'])."','".$db->escapeString($data['description'])."','".$db->escapeString($data['date'])."','".$db->escapeString($data['duration'])."','".$db->escapeString($data['startlocation'])."','".$db->escapeString($data['image'])."','".$db->escapeString($data['userid'])."','".$db->escapeString($data['regionid'])."','".$db->escapeString($data['difficultyid'])."','".$db->escapeString($data['ratingid'])."','".$db->escapeString($data['activityid'])."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveTour($data)
    {
        $db = new Database();

        $sql = "UPDATE tour SET name='".$db->escapeString($data['name'])."',description='".$db->escapeString($data['description'])."',date='".$db->escapeString($data['date'])."',duration='".$db->escapeString($data['duration'])."',startlocation='".$db->escapeString($data['startlocation'])."',image='".$db->escapeString($data['image'])."',regionid='".$db->escapeString($data['regionid'])."',difficultyid='".$db->escapeString($data['difficultyid'])."',ratingid='".$db->escapeString($data['ratingid'])."',activityid='".$db->escapeString($data['activityid'])."' WHERE id=".intval($data['id']);
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