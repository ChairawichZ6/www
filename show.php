<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'chaicom.mysql.database.azure.com', 'chairawich@chaicom', 'Kunchai12', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td>
        <input type="button" value="แก้ไข" onclick="window.location.href='https://webfook.azurewebsites.net/edit.php?name=<?php echo $Result['Name'];?>&comment=<?php echo $Result['Comment'];?>&link=<?php echo $Result['Link'];?>'" /> 
        <input type="button" value="ลบ" onclick="window.location.href='https://webfook.azurewebsites.net/delete.php?rn=<?php echo $Result['Name'];?>'" />
    </td>
   </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
<form>
            <a href="https://webfook.azurewebsites.net/Form.html"><button type="button">เพิ่ม</button></a>
</form>
<style>
body {
  background-image: url('it kmitl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
  border: 2px solid black;
  padding: 25px;
  background: url(mountain.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}
</html>
