<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class IndexController extends Controller
{
	protected $viewFileName = "index"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Übersicht";
		$this->view->username = $this->user->username;

        if(isset($_GET['region']) && $_GET['region'] != '')
        {
            //schau ob es die region gibt
            $this->view->tours = TourModel::getToursByRegion($_GET['region']);

        }
        else
        {
            $this->view->tours = TourModel::getTour();
        }
        $this->view->regions = AttributeModel::getRegion();
    }

}