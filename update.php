<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chaicom.mysql.database.azure.com', 'chairawich@chaicom', 'Kunchai12', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];
$id = '';
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
 
while($Result = mysqli_fetch_array($res))
{
    if ($Result['Name'] == $name){
        $id = $Result['ID'];
    }
}
$sql = "UPDATE guestbook 
        SET Comment='$comment', Link='$link'
        WHERE ID='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Update successfully"; echo $id;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>