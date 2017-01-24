<?php

/*
 * ---------------------------------------------------------------------------------------------------------------------
 *  Database connection detalis
 * ---------------------------------------------------------------------------------------------------------------------
*/
	define( 'db', 'prodavnica');
	define( 'host', 'localhost');
	define( 'user', 'root'); 
	define( 'password', '');

	$database = @mysql_pconnect( host, user, password ) or die( "Couldn't establish link to database-server");
	mysql_select_db( db ) or die( "Database error: DBC01");
	mysql_query( 'SET NAMES utf8', $database );
?>