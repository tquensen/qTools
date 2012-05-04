<?php

class qBoolean extends qBase
{
    public function __construct($value = null)
    {
        $this->value = (bool) $value;
    }
    
    public static function create($value)
    {
        return new qBoolean($value);
    }
}

