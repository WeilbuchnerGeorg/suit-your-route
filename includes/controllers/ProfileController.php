<?php

class ProfileController extends Controller
{
    protected $viewFileName = "profile"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Profil";
        $this->view->username = $this->user->username;

        $this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
        $this->view->tours = TourModel::getTourByUserId($this->user->id);
        $this->view->userdetails = UserModel::getUserByUserId($this->user->id);
    }

}