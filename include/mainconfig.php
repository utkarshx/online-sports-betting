<?php
$config['baseurl'] = 'http://localhost:3000';
$config['basedir'] = '/Users/utkarshshukla/ArrowAI/Code/online-sports-betting';

$config['private_key'] = 'shuklaprivate';
$config['public_key'] = rand(10000, 50000);
$config['noreply_email'] = 'noreply@sportsbet.com';
$config['default language'] = 'en';

// connect to database
$DBhost="localhost";
$DBuser="root";
$DBpass="";

//$DBuser="dbmanager";
//$DBpass="smarttech";
mysqli_connect($DBhost,$DBuser,$DBpass);
mysqli_select_db('sportsdb');
mysqli_query("SET NAMES 'utf8'");
?>
