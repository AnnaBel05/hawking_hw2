<?php

namespace HW_2\Models;

use HW_2\interfaces\RarityInterface;

class Weapon implements RarityInterface
{
    private $id;
    private $type;
    private $name;
    private $rarity;

    public function __construct(int $id,
                                string $type, 
                                string $name, 
                                int $rarity)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->rarity = $rarity;
    }
    
    function getId() 
    {
		return $this->id;
	}
    
	public function getType() 
    {
		return $this->type;
	}
	
	public function getName() 
    {
		return $this->name;
	}
	
	public function getRarity() 
    {
		return $this->rarity;
	}
	/**
	 *
	 * @return string
	 */
	function writeRarity(): string {
        return $this->getRarity();
	}
}

?>