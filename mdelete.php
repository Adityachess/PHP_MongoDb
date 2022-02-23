   <?php
$conn= new MongoClient("mongodb://root:root@192.168.50.169:27017");
echo 'Connection successfully done!!!<br>';
//creating database 
$db = $conn->php_mongo;
echo "database created !! <br>";
$collection = $db->employee;
//deleting record
$collection->remove( array( 'name' =>'Peter'));
echo "document deleted successfully<br>";

?>
