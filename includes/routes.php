<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');

$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/profile'] = array('controller' => 'ProfileController', 'uniqueName' => 'profile');
$route['/profile.html'] = array('controller' => 'ProfileController', 'uniqueName' => 'profile');

$route['/detail'] = array('controller' => 'DetailController', 'uniqueName' => 'detail');
$route['/detail.html'] = array('controller' => 'DetailController', 'uniqueName' => 'detail');

$route['/impressum'] = array('controller' => 'ImpressumController', 'uniqueName' => 'impressum');
$route['/impressum.html'] = array('controller' => 'ImpressumController', 'uniqueName' => 'impressum');