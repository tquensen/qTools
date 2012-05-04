<?php

class qInteger extends qBase
{
    public function __construct($value = null)
    {
        $this->value = (int) $value;
    }
    
    public static function create($value)
    {
        return new qInteger($value);
    }
}
