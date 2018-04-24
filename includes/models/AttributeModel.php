<?php

class AttributeModel
{
    public static function getRating()
    {
        $db = new Database();

        $sql = "SELECT * FROM rating";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $ratingsArray = array();

            while($row = $db->fetchObject($result))
            {
                $ratingsArray[] = $row;
            }

            return $ratingsArray;
        }

        return null;
    }
    public static function getRegion()
    {
        $db = new Database();

        $sql = "SELECT * FROM region";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $regionsArray = array();

            while($row = $db->fetchObject($result))
            {
                $regionsArray[] = $row;
            }

            return $regionsArray;
        }

        return null;
    }
    public static function getRegionById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM region WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }
    public static function getDifficulty()
    {
        $db = new Database();

        $sql = "SELECT * FROM difficulty";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $difficultiesArray = array();

            while($row = $db->fetchObject($result))
            {
                $difficultiesArray[] = $row;
            }

            return $difficultiesArray;
        }

        return null;
    }
    public static function getDifficultyById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM difficulty WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }
    public static function getActivity()
    {
        $db = new Database();

        $sql = "SELECT * FROM activity";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $activitiesArray = array();

            while($row = $db->fetchObject($result))
            {
                $activitiesArray[] = $row;
            }

            return $activitiesArray;
        }

        return null;
    }
    public static function getActivityById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM activity WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }
}