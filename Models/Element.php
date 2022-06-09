<?php

namespace HW_2\Models;

class Element 
{
    private $id;
    private $name;
    private $color;
    private $description;

    public function __construct(int $id,
                                string $name, 
                                string $color, 
                                string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->description = $description;
    }   

    function getId() 
    {
		return $this->id;
	}
	
	public function getName() 
    {
		return $this->name;
	}
 
	public function getColor() 
    {
		return $this->color;
	}

	public function getDescription() 
    {
		return $this->description;
	}
}

?>