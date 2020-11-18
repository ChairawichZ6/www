<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>ITF Lab</title>
</head>
<body class="text-center">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'chaicom.mysql.database.azure.com', 'chairawich@chaicom', 'Kunchai12', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table text-center" width="600" border="1">
  <thead class="thead-dark">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th scope="col" width="350"> <div align="center">Link </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
  </thead>
<tbody class="text-center">
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td>
        <input type="button" value="แก้ไข" onclick="window.location.href='https://webfook.azurewebsites.net/edit.php?name=<?php echo $Result['Name'];?>&comment=<?php echo $Result['Comment'];?>&link=<?php echo $Result['Link'];?>'" /> 
        <input type="button" value="ลบ" onclick="window.location.href='https://webfook.azurewebsites.net/delete.php?rn=<?php echo $Result['Name'];?>'" />
    </td>
   </tr>
<?php
}
?>
</tbody>
</table>
<?php
mysqli_close($conn);
?>
<form>
    <input class="btn btn-success" type="button" value="เพิ่ม" onclick="window.location.href=https://webfook.azurewebsites.net/Form.html'" /> 
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<style>
body {
  background-image: url('it kmitl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-color: hsla(89, 43%, 51%, 0.3);
}
</body>
</html>
