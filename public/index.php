<?php 

define("ROOT","..");
// Autoloader
require '../App/Autoloader.php';
Autoloader::register();

if(isset($_GET["p"])){
    $p=htmlspecialchars($_GET["p"]);
  
}else{
    $p="home";
    
}
 // ROOT____
ob_start();
if($p=="home"){
    require ROOT."/pages/home.php";
}elseif ($p=="sign_up") {
    require ROOT."/pages/sign-up.php";
}elseif ($p=="original") {
    require ROOT."/pages/original.php";
}
$content=ob_get_clean();

// Default content

require ROOT.'/pages/templates/default.php';
   
?>