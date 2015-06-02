<?php
$host = 'localhost'; // MySQL server hostname //'mysql.hostinger.com.ua';
$database = 'linx';
$username = 'root';
$password = '';
$mysqlconn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
?>
<?php
$url = $_GET['url'];
print($url);
try {
// set the PDO error mode to exception
  $mysqlconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// sql to create table
  $createsql = "CREATE TABLE IF NOT EXISTS urls(url varchar(255))";
// use exec() because no results are returned
  $mysqlconn->exec($createsql);
  echo "Table urls created successfully";
}
catch(PDOException $e){
  echo $createsql . "<br>" . $e->getMessage();
}
$STM = $mysqlconn->prepare("INSERT INTO urls(url) VALUE (:url)");
$STM->bindParam(':url', $url);
$STM->execute();
?>