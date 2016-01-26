
<?php 
/* Configuration settings for All Sites 
    Update the SMTP credentials below
*/
//echo "root config";
// set the default time zone
date_default_timezone_set('America/Los_Angeles');

// Default Email Settings 
$site['from_name'] = ''; // from email name 
$site['from_email'] = ''; // from email address 

//use external mail server. 
$site['smtp_mode'] = 'enabled'; // enabled or disabled 
$site['smtp_host'] = ''; 
$site['smtp_port'] = ''; 
$site['smtp_username'] = '';
$site['smtp_password'] = '';

?>