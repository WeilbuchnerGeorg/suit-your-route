<?php

class Tour extends RESTClass
{
    private $Database = null;

    public function __construct()
    {
        $this->Database = new Database();
    }

    public function __destruct()
    {
        $this->Database = null;
    }

    protected function getRequest($data)
    {
        if(isset($data['returnView']) && $data['returnView'])
        {
            $view = new View('tour');

            if(isset($data['id']))
            {
                $dataForView = TourModel::getTourById($data['id']);

                $dataForView->regions = AttributeModel::getRegion();
                $dataForView->ratings = AttributeModel::getRating();
                $dataForView->difficulties = AttributeModel::getDifficulty();
                $dataForView->activities = AttributeModel::getActivity();


                $user = new User();

                if($dataForView->userid = $user->id)
                {
                    //ok - its your tour!

                    //load old values
                    $view->setData((array) $dataForView);

                    $jsonResponse = new JSON();
                    $jsonResponse->result = true;
                    $jsonResponse->setData(array('html' => $view->parse()));
                    $jsonResponse->send();
                }
                else
                {
                    //its not your tour!
                    $jsonResponse = new JSON();
                    $jsonResponse->result = false;
                    $jsonResponse->setMessage('You tried to edit an tour that doesn\'t belong to you! No chance!');
                    $jsonResponse->send();
                }
            }
            else
            {
                //new
                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setData(array('html' => $view->parse()));
                $jsonResponse->send();
            }
        }
    }

    protected function createRequest($data)
    {
        $requiredFields = array('name', 'description', 'userid', 'regionid', 'difficultyid', 'ratingid','activityid');

        $error = false;
        $errorFields = array();
        $user = new User();



        foreach($requiredFields as $fieldname)
        {
            if(!isset($data[$fieldname]) || $data[$fieldname] == "")
            {
                $error = true;
                $errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
            }
        }

        if(!$error)
        {
            $data['userId'] = $user->id;

            TourModel::createNewTour($data);

            $jsonResponse = new JSON();
            $jsonResponse->result = true;
            $jsonResponse->setMessage('Tour created!');
            $jsonResponse->send();
        }
        else
        {
            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setData(array('errorFields' => $errorFields));
            $jsonResponse->send();
        }

    }

    protected function saveRequest($data)
    {
        $requiredFields = array('name', 'description', 'regionid', 'difficultyid', 'ratingid','activityid');

        $error = false;
        $errorFields = array();
        $user = new User();

        foreach($requiredFields as $fieldname)
        {
            if(!isset($data[$fieldname]) || $data[$fieldname] == "")
            {
                $error = true;
                $errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
            }
        }

        if(!$error)
        {
            $tourObj = TourModel::getTourById($data['id']);

            if($tourObj->userid != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to save/edit that tour!");
                $jsonResponse->send();
            }
            else
            {
                TourModel::saveTour($data);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Tour saved!');
                $jsonResponse->send();
            }

        }
        else
        {
            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setData(array('errorFields' => $errorFields));
            $jsonResponse->send();
        }
    }

    protected function deleteRequest($data)
    {
        $user = new User();

        if(!isset($data['id']))
        {
            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setMessage("Can't delete - id is missing!");
            $jsonResponse->send();
        }
        else
        {
            $tourObj = TourModel::getTourById($data['id']);

            if($tourObj->userid != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to delete that tour!");
                $jsonResponse->send();
            }
            else
            {
                TourModel::deleteTour($tourObj->id);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Tour deleted!');
                $jsonResponse->send();
            }
        }

    }
}