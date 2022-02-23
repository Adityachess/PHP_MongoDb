    <?php
$conn= new MongoClient("mongodb://root:root@192.168.50.169:27017");
echo 'Connection successfully done!!!<br>';
//creating database 
$db = $conn->php_mongo;
echo "database created !! <br>";
$collection = $db->employee;
//updating record
$collection->update( array( 'salary' =>'45000'),
array('$set'=>array('salary'=>'65000')));
echo "record updated successfully<br>"

?>
