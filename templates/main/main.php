<!DOCTYPE html>
<html>
<script
		src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous"></script>
<script src="validate.js"></script>

<?php

	// <!-- отрисовка шапки таблицы для вывода данных -->

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

	// <!-- вывод данных из БД -->

    foreach ($characters as $character) 
    {
        echo '<form action="" method="GET">';
			echo '<tr>';
			echo '<td> <input name="id" value=' . $character["id"] . ' readonly></td>';
			echo '<td>' . $character['name'] . '</td>';
			echo '<td>' . $character['rarity'] . '</td>';
			echo '<td>' . $character['weapon'] . '</td>';
			echo '<td>' . $character['element'] . '</td>';
			echo '<td><input type="submit" value="Delete"> </form></td>';
			echo '<td><a href="read.php?id=' . $character['id'] . '" title="View Record"><input type="submit" value="View"></a></td>';
	 		echo '</tr>';
    }

    echo '</tbody>';
	echo '</table>';

?>


<!-- форма для создания новой записи в БД -->
<br>
<body>

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
</body>
</html>