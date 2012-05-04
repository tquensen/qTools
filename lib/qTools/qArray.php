<?php

class qArray extends qBase
{
    public function __construct($value = null)
    {
        $this->value = (array) $value;
    }
    
    public static function create($value)
    {
        return new qArray($value);
    }
}

