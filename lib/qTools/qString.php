<?php

class qString extends qBase
{
    public function __construct($value = null)
    {
        $this->value = (string) $value;
    }
    
    public static function create($value)
    {
        return new qString($value);
    }
}
