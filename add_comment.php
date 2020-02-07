
<form action="insert.php" method="post">
	Name: <input type="text" name="name" value="<?=$row['name']?>"/>
	Surname: <input type="text" name="surname" value="<?=$row['surname']?>"/>
	Middle Name: <input type="text" name="middlename" value="<?=$row['middlename']?>">
	Number: <input type="number" name="number" value="<?=$row['number']?>">
	Position: <input type="text" name="position" value="<?=$row['position']?>">
	<input type="hidden" name="id" value="<?=$row['id']?>">
	<input type="submit">
</form>