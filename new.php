     <?php
$conn= new MongoClient("mongodb://root:root@192.168.50.169:27017");
echo 'Connection successfully done!!!<br>';
//creating database 
$db = $conn->php_mongo;
echo "database created !! <br>";
$collection = $db->employee;
//inserting record
$collection->insert( array( 'name' =>'Anant', 'salary' => '55000' ) );
echo "record inserted<br>"

?>
