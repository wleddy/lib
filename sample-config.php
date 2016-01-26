
<?php 
/* Configuration settings for All Sites 
    Update the SMTP credentials below
    Rename this file to 'config.php
*/
//echo "root config";
// set the default time zone
date_default_timezone_set('America/Los_Angeles');

// Default Email Settings 
$site['from_name'] = 'Bill Leddy'; // from email name 
$site['from_email'] = 'bill@williesworkshop.net'; // from email address 

//use external mail server. 
$site['smtp_mode'] = 'enabled'; // enabled or disabled 
$site['smtp_host'] = 'smtpout.secureserver.net'; 
$site['smtp_port'] = '80'; 
$site['smtp_username'] = 'mailagent@williesworkshop.net';
$site['smtp_password'] = '';

?>