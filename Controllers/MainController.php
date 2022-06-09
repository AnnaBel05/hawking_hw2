<?php

namespace HW_2\Controllers;

use HW_2\Services\Db;
use HW_2\View\View;

class MainController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $this->db = new Db();
    }

    public function main() 
    {
        include __DIR__ . '/../../templates/main/main.php';

        $characters = $this->db->query('SELECT Characters.id, character_name, character_rarity, 
            weapons.weapon_type, weapons.weapon_name, elements.element_name FROM `Characters` 
            JOIN `weapons` ON weapons.id = Characters.character_weapon JOIN `elements` 
            ON elements.id = Characters.character_element;');

        var_dump($characters);
    }
}

?>