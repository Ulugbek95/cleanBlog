<?
include 'bd.php';
$username = $_POST['name'];
$useremail = $_POST['email'];

$userQuery = mysql_query("SELECT `id` FROM users WHERE `name`=\"$username\" AND `email`=\"$useremail\"");
$userRow = mysql_fetch_assoc($userQuery); 
$user_id=$userRow['id'];
$date= date (time());
$comment = $_POST['comment'];
$PostId = $_POST['PostId'];
// echo "username=".$username."<br>"; 
// echo "useremail=".$useremail."<br>";
// echo "user_id=".$user_id."<br>";
// echo "PostId=".$PostId."<br>";
// echo "date=".$date."<br>";

mysql_query("INSERT INTO `post_comments` (`user_id`, `date`, `comment`, `post_id`) VALUES ($user_id, \"$date\", \"$comment\", $PostId);");
header("location:index.php?PostId=$PostId");
exit();
?>