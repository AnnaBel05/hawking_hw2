<?php

namespace HW_2\Models;

class Character 
{
    private $id;
    private $name;
    private $element;
    private $rarity;
    private $weapon;

    public function __construct(int $id,
                                string $name, 
                                Element $element, 
                                int $rarity, 
                                Weapon $weapon)
    {
        $this->id = $id;
        $this->name = $name;
        $this->element = $element;
        $this->rarity = $rarity;
        $this->weapon = $weapon;
    }

	function getId() 
    {
		return $this->id;
	}

    public function getName(): string
    {
        return $this->name;
    }
    
	public function getElement() 
    {
		return $this->element;
	}
	
	public function getRarity() 
    {
		return $this->rarity;
	}
	
	public function getWeapon() 
    {
		return $this->weapon;
	}
}

?>