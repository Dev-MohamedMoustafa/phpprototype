<?php
/*
 * this code was written by Mohamed Moustafa
 * As a preview of his knowledge in Design Patterns
 * 
 */

class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    public function __clone()
    {
        $this->component = clone $this->component;
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}

class ComponentWithBackReference
{
    public $prototype;
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}
 ?>