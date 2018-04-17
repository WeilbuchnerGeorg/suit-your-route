<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo $this->title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<?php if($this->current == "login"): ?>
		<link href="css/toastr.min.css" rel="stylesheet">
	<?php endif; ?>

		<link href="css/main.css" rel="stylesheet">
		<link href="css/myguide.css" rel="stylesheet">


		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<?php if($this->current == "index"): ?>
		<script type="text/javascript" src="js/core.js"></script>
	<?php elseif($this->current == "register"): ?>
		<script type="text/javascript" src="js/register.js"></script>
	<?php elseif($this->current == "login"): ?>
		<script type="text/javascript" src="js/toastr.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	<?php endif; ?>

</head>
<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index">
          myguide
        </a>
      </div>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index" <?php if($this->current == "index"): ?>class="active"<?php endif; ?>>Startseite</a></li>
        <?php if(LOGGED_IN == true): ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mein Profil <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile">Profil</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
					<li <?php if($this->current == "login"): ?>class="active"<?php endif; ?>><a href="login">Login</a></li>
        <?php endif; ?>

      </ul> 
    </div>
  </nav>
</header>