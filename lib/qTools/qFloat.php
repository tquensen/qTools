<?php

class qFloat extends qBase
{
    public function __construct($value = null)
    {
        $this->value = (float) $value;
    }
    
    public static function create($value)
    {
        return new qFloat($value);
    }
}

