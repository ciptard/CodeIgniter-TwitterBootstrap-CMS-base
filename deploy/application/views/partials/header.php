<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		
	<title><?php echo $title ?></title>
	
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css" />
    <link rel="stylesheet" href="/_includes/css/style.css" />
    
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		//<!--
		google.load('jquery', '1.7.1');
		//-->
	</script>
	<script type="text/javascript" src="/_includes/js/script.js" ></script>

</head>

<body id="<?php echo isset($bodyID) ? $bodyID : ''; ?>">

<div id="wrapper">
<div id="header">
	<div style="z-index: 5;" class="topbar-wrapper">
    <div class="topbar">
      <div class="topbar-inner">
        <div class="container">
          <h3><a href="/"><?php echo $title ?></a></h3>
          <?php if($loggedIn){ ?>
          <ul class="nav">
            <li class="<?php echo ($bodyID == 'home-index') ? 'active' : ''; ?>"><a href="/">Home</a></li>
          </ul>         
          <ul class="nav secondary-nav">
            <li>
                <a href="/auth/logout">Logout</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div><!-- /topbar-inner -->
    </div><!-- /topbar -->
  </div>
</div>
    <div class="container">
    