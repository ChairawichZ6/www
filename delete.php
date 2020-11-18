<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chaicom.mysql.database.azure.com', 'chairawich@chaicom', 'Kunchai12', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$Name=$_GET['rn'];
$query = "DELETE FROM guestbook WHERE Name = '$Name'";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "Succcess";
}
else
{
    echo "fail";
}

echo var_export();
?>
<div class="my-5">
<input class="btn btn-success" type="button" value="กลับหน้าหลัก" onclick="window.location.href='https://webfook.azurewebsites.net/show.php'" />
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
</body>
</html>
