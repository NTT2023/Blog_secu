<?php
define("PDO_HOST", "localhost");
define("PDO_DBBASE", "tp1_blog");
define("PDO_USER", "root");
define("PDO_PW", "");

function initDatabase()
{
	$dir = dirname(__FILE__);
	try {
		//$db = new PDO("mysql:host=" . PDO_HOST . ";"."dbname=" . PDO_DBBASE, PDO_USER, PDO_PW);
		$db = new PDO("mysql:host=" . PDO_HOST . ";" . "dbname=" . PDO_DBBASE, PDO_USER, PDO_PW, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		// $db = new PDO('mysql:host=localhost;dbname=Base', 'login', 'mdp');
	} catch (PDOException $e) {
		die('DB error: '. $e->getMessage());
	}
	return $db;
}
/* Emule le fonctionnement de "magic_quotes_gpc = Off" dans "php.ini".
* Cf http://fr.php.net/manual/fr/security.magicquotes.disabling.php
*/
/* function noMagicQuotes()
{
	if (get_magic_quotes_gpc()) {
		$_POST = array_map('stripslashes_deep', $_POST);
		$_GET = array_map('stripslashes_deep', $_GET);
		$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
		$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
	}
}*/

function stripslashes_deep($value)
{
	$value = is_array($value) ?
		array_map('stripslashes_deep', $value) :
		stripslashes($value);
	return $value;
}
?>
