<!doctype html>

<html long="en">

<head>

	<meta charset="UTF-8">

	<title>Add item</title>

</head>

<body>

	<h3>Добавить событие</h3>

	<form action="create.php" method="post">
		<p>Start</p>
		<input type="time" name="start">
		<p>Finish</p>
		<input type="time" name="finish">
		<p>Priority</p>
		<input typr="number" name="priority">
		<p>Discription</p>
		<input type="textarea" name="discription">
		<button type="submit">Add new product
	</form>
</body>
</html>