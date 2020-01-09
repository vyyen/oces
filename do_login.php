<?php

echo $_POST['username'] . "\n <br>";
echo $_POST['password']. "\n <br>";

$db = new SQLite3('oces.sqlite');


$password = $db->querySingle('SELECT password from students where email="' . $_POST['username'] . '"');

echo $password . "\n";

if ($password == $_POST['password']) {
	echo "success";
} else {
	echo "failed";

}