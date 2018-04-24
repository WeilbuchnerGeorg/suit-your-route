<?php

class DetailController extends Controller
{
    protected $viewFileName = "detail"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Tour Detail";
        $this->view->username = $this->user->username;

        if(!isset($_GET['id']))
        {
            $this->view->noIdError = true;
        }
        else
        {
            $tourObj = TourModel::getTourById($_GET['id']);

            if($tourObj === null)
            {
                $this->view->invalidId = true;
            }
            else
            {
                $this->view->tour = $tourObj;
            }

        }
        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}