<?php 
include 'connect_my_sql_db.php';
$sql="SELECT cust_id, cust_name, father_name FROM customer 
        WHERE cust_name LIKE '%".$_REQUEST['term']."%'";

$cust_name = array();
$father_name = array();
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)) 
{ 
$title=$row['cust_name']; 
$url=$row['father_name']; 
$posts[] = array('label'=> $title, 'desc'=> $url);
} 
echo json_encode($posts);
?>