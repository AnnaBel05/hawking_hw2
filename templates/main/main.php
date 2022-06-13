<!DOCTYPE html>
<html>
	<title> Characters </title>
	<script
			src="https://code.jquery.com/jquery-1.12.3.min.js"
			integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
			crossorigin="anonymous"></script>
	<script src="validate.js"></script>

<body>
	Hello world

<div>

<!-- форма для создания новой записи в БД -->
<br>
	<form action="" method="POST">
		<p> Name:
		<input type="text" name="name" id="name"/></p>
		<span id="message"></span>
		<p> Element:
		<input type="number" name="element" id="element"/></p>
		<p> Weapon:
		<input type="number" name="weapon" id="weapon"/></p>
		<p> Rarity:
		<input type="number" name="rarity" id="rarity"/></p>
		<input type="submit" id="submit" value="Add"/>
	</form>
</div>
<br>
<div>
<?php
	// use Controllers\MainController;

	// spl_autoload_register(function (string $className) {
	// 	require_once __DIR__ . '/../src/' . $className . '.php';
	// });

	// $controller = new \HW_2\Controllers\MainController();
	// $controller->main();

	// <!-- отрисовка шапки таблицы для вывода данных -->

	require_once "config.php";

	$sql = 'SELECT Characters.id, character_name, character_rarity, weapons.weapon_type, weapons.weapon_name, elements.element_name FROM `Characters` JOIN `weapons` ON weapons.id = Characters.character_weapon JOIN `elements` ON elements.id = Characters.character_element;';
	
	
	if($result = $mysqli->query($sql))
	{
		if ($result->num_rows > 0)
		{
			echo '<table border="1">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>No</th>';
			echo '<th>Имя персонажа</th>';
			echo '<th>Редкость</th>';
			echo '<th>Вид оружия</th>';
			echo '<th>Название оружия</th>';
			echo '<th>Элемент</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';

			while($character = $result->fetch_array())
			{
				echo '<form action="" method="GET">';
				echo '<tr>';
				echo '<td> <input name="id" value=' . $character['id'] . ' readonly></td>';
				echo '<td>' . $character['character_name'] . '</td>';
				echo '<td>' . $character['character_rarity'] . '</td>';
				echo '<td>' . $character['weapon_type'] . '</td>';
				echo '<td>' . $character['weapon_name'] . '</td>';
				echo '<td>' . $character['element_name'] . '</td>';
				echo '<td><input type="submit" value="Delete"> </form></td>';
				echo '<td><a href="read.php?id=' . $character['id'] . '" title="View Record"><input type="submit" value="View"></a></td>';
				echo '</tr>';
			}

			echo '</tbody>';
			echo '</table>';
			$result->free();
		}
		else echo "";
	}
	else echo "";

	$mysqli->close();

?>
</div>
</body>
</html>