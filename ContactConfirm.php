<?php
    session_start();
    //for other carriers visit
    //https://kb.sandisk.com/app/answers/detail/a_id/17056/~/list-of-mobile-carrier-gateway-addresses

    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text1 = $_POST['text1'];
    $to = "7202124015@tmomail.net";
    $from = "Matthew@MatthewBluestein.com";
    $message = "\nName: ".$first." ".$last."\n"."Phone: ".$phone."\n"."Email: ".$email."\n".$text1;
    $headers = "From: $from \n";
    mail($to, '', $message, $headers);
?>

<!doctype html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Matthew Bluestein</title>
    <link rel="shortcut icon" type="image/x-icon" href="_images/Blue.jpg" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- HTML5 for IE backwards compatability-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link href="MatthewBluestein.css" rel="stylesheet" type="text/css">
<script src="MatthewBluestein.js" type="text/javascript"></script>
    
</head>
<body> 

<div id="heightofpage">
<div id="heightofpage">
<!-- full navbar -->
<nav class="navbar navbar-default" style="padding-bottom: -1;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="MatthewBluestein.htm#matt">  Matthew Bluestein  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="MatthewBluestein.htm" id="medium"> Home <span class="sr-only">(current)</span></a></li>
        <li><a href="Programming.htm" title="Programming" id="medium">Programming</a></li>
        <li><a href="ForeignLanguage.htm" title="Foreign Language" id="medium">Foreign Language</a></li>
        <li><a href="CommunityService.htm" title="Community Service" id="medium">Community Service</a></li>
        <li><a href="Art.htm" title="Art" id="medium">Art</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="Contact.php" title="Contact" id="medium">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div> 
    
<!--Contact Confirmed!-->
<!--TODO insert confirmation if successful and home button-->
<div id="heightofpage">
<center>
	<section class="container-fluid">
		<div class="col-md-12">
			<p></p>
		</div>
	</section>
	<section class="container-fluid">
		<div class="col-md-12">
			<h1>Message Sent Successfully!</h1>
		</div>
	</section>
	<section class="container-fluid">
		<div class="col-md-12">
			<p>Click <a href="MatthewBluestein.htm">HERE</a> to return to the homepage.</p>
		</div>
	</section>
</center>
</div>
    
<!-- footer -->
<section class="container-fluid">
        <footer class="col-md-12" id="home">Made from scratch by Matthew Bluestein</footer>
</section>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>