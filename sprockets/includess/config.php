<?php 
/*
config.php 
stores configuration information for our web application


*/

//prevents date errors
//removes header already sent errors
ob_start();

define('DEBUG',true); #we want to see all errors


include 'credentials.php';//stores database info
include 'common.php';//stores favorite functions 



date_default_timezone_set('America/Los_Angeles'); 
//create config object
$config = new stdClass;



//create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//set website defaults
$config->title = THIS_PAGE;
$config->banner = 'Sprockets';

switch(THIS_PAGE){
        
    case 'contact.php':
        $config->title = 'Contact Page';
        break;
        
        case 'appointment.php':
        $config->title = 'Appointment Page';
        $config->banner = 'Doubble Sprockets';
        break;
        
        case 'Templete.php':
        $config->title = 'Templete Page';
        break;
}



//echo THIS_PAGE; 

//echo basename($_SERVER['PHP_SELF']);
//die;


?>