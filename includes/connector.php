<?php
$dbHost = getEnv('DB_HOST');
$dbName = getEnv('DB_NAME');
$dbUser = getEnv('DB_USER');
$dbPassword = getEnv('DB_PASSWORD');

try {
  $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
  // set the PDO error mode to exception
  $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>