<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_2";
$connect = mysqli_connect($servername, $username, $password, $database);
$sortMode = 2;


if (isset($_GET['page']))
{
	$page = $_GET['page'];
}
else
{
	$page = 1;
}

$notesOnPage = 2;
$from = ($page - 1)*$notesOnPage;

if(!$connect)
{
	die('Error connect to database!');
}

?>

<!doctype html>
<html long="en">
<head>
	<meta charset="UTF-8">
	<title>Items</title>
</head>

<style>
	th, td 
	{
		padding: 10px;
	}
	th{
		background: #606060;
		color: #fffff;
	}
	td{
		background: #b5b5b5;
	}
</style>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Start</th>
			<th>Finish</th>
			<th>Priority</th>
			<th>Discription</th>
			<th>Delete</th>
		</tr>

<?php

		$items = mysqli_query($connect, "SELECT * FROM `lab_2_tab_1` WHERE id > 0 ORDER BY `lab_2_tab_1`.`Приоритет` ASC LIMIT $from,$notesOnPage");

		$items = mysqli_fetch_all($items);

	foreach ($items as $item)
		{
			?>
			<tr>
				<td><?= $item[0] ?></td>
				<td><?= $item[1] ?></td>
				<td><?= $item[2] ?></td>
				<td><?= $item[3] ?></td>
				<td><?= $item[4] ?></td>
				<td><a href="delete.php?id=<?=$item[0]?>">Удалить</a></td>
			</tr>
			<?php

		};

	$query = "SELECT COUNT(*) as count FROM lab_2_tab_1";
	$countResult = mysqli_query($connect, $query) or die(mysqli_error($connect));
	$count = mysqli_fetch_assoc($countResult)['count'];
	$pageCount = ceil($count/$notesOnPage);
	
?>
		
	</table>

<?php for ($i = 1; $i <= $pageCount; $i++)
{
	?>
	<a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> 
	<?php
}
?>

<a href="lab_2.php">Назад</a>

</body>
</html>