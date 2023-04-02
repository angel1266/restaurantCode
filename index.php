<?php
$conff = mysqli_connect("localhost","u271379494_restaurant","Gu1t4rr4123$","u271379494_restaurant_cli");
$result = mysqli_query($conff, "Select * from client where restaurant_code = 'con001'");
mysqli_data_seek ($result, 0);
$extraido= mysqli_fetch_array($result);
if(strtotime($extraido["final"]) <= strtotime(date("yy-m-d"))){
  echo "Su suscripción se encuentra vencida";
}
mysqli_close($conff);
require 'config.php';
require 'util/Auth.php';

// __autoload / Also spl_autoload_register (Take a look at it if you like)
function banshee_autoload($class) {
	require LIBS . $class .".php";
}


/*// Use an autoloader!
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Library
require 'libs/Database.php';
require 'libs/Session.php';
require 'libs/Hash.php';
*/
spl_autoload_register ("banshee_autoload");
$bootstrap = new Bootstrap();
$bootstrap->init();

