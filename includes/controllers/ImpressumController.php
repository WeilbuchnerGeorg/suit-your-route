<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class ImpressumController extends Controller
{
    protected $viewFileName = "impressum"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = "Impressum";
        $this->view->username = $this->user->username;

    }

}