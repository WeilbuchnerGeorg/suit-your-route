<?php

class DetailController extends Controller
{
    protected $viewFileName = "detail"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Tour Detail";
        $this->view->username = $this->user->username;

        $this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}