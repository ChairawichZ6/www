<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
<?php
    $Name=$_GET['name'];
    $Comment=$_GET['comment'];
    $Link=$_GET['link'];
?>
  <form action = "update.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name" value=<?php echo $Name;?>> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment" value=<?php echo $Comment;?>></textarea> <br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link" value=<?php echo $Link;?>> <br><br>
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>
