<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SGF - SUPPORTSAT</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
  <body>

<div class="container">
  <form class="form"  method="Post">
    <div class="text-center">
    <H1>SGF - SUPPORTSAT</H1>
     <h3>Sistema para gestão de Frotas</h3>
   </div>
   <div class="form-group"> 
     <label for="inputEmail">Email</label>
     <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required autofocus value="teste@teste">
   </div>
   <div class="form-group"> 
     <label for="inputPassword">Senha</label>
     <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required value="123">
   </div>
   <div class="form-group"> 
     <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
   </div>
 </form>
</div> <!-- /container -->

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>