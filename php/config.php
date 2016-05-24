<?php
//1. constante aanmaken
define('DBNAME', 'student_register');
define('DBUSER', 'root');
define('DBHOST',  'localhost');
define('DBPASS', '');

//2. PDO verbinding maken met database
//- geef eerst de database type
//- dan de database naam
$db =  new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);

