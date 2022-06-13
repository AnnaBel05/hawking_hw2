<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
</head>
<body>

<?php

// проверка существования записи в бд

if (isset($_GET["id"]) && !empty( $_GET['id'] ) ) 
{
    require_once "config.php";

    $sql = "SELECT Characters.id, Characters.character_name, 
        Characters.character_rarity, weapons.weapon_type, weapons.weapon_name, 
        elements.element_name FROM `Characters` JOIN `weapons` 
        ON weapons.id = Characters.character_weapon JOIN `elements` 
        ON elements.id = Characters.character_element WHERE Characters.id = ?;";

    if ($stmt = $mysqli->prepare($sql))
    {
        $stmt->bind_param("i", $param_id);

        $param_id = trim($_GET["id"]);

        if ($stmt->execute()) 
        {
            $result = $stmt->get_result();

            if($result->num_rows == 1) 
            {
                // создание переменных с данными из записи в БД

                $row = $result->fetch_array(MYSQLI_ASSOC);

                $character_name = $row['character_name'];
                $character_rarity = $row['character_rarity'];
                $weapon_type = $row['weapon_type'];
                $weapon_name = $row['weapon_name'];
                $element_name = $row['element_name'];
            }
            else
            {
                header("location: error.php");
            }
        }
    }
}
?>

<!-- вывод данных по созданным ранее переменным -->

    <h1>View Record</h1>
        <div class="form-group">
            <label>Character name</label>
            <p><b><?php echo $character_name ?></b></p>
        </div>
        <div class="form-group">
            <label>Character rarity</label>
            <p><b><?php echo $character_rarity ?></b></p>
        </div>
        <div class="form-group">
            <label>Weapon type</label>
            <p><b><?php echo $weapon_type ?></b></p>
        </div>
        <div class="form-group">
            <label>Weapon name</label>
            <p><b><?php echo $weapon_name ?></b></p>
        </div>
        <div class="form-group">
            <label>Element name</label>
            <p><b><?php echo $element_name ?></b></p>
        </div>
    <p><a href="main.php" class="btn btn-primary">Back</a></p>

</body>
</html>