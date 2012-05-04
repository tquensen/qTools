<?php

abstract class qBase
{
    public $value;
    
    public function __construct($value = null)
    {
        $this->value = $value;
    }
    
    /**
     * returns the raw value
     */
    public function get()
    {
        return $this->value;
    }
    
    /**
     *
     * @return string 
     */
    public function __toString()
    {
        return (string) $this->get();
    }
    
    /**
     *
     * @return \qString 
     */
    public function toString()
    {
        return new qString($this->get());
    }
    
    /**
     *
     * @return \qArray 
     */
    public function toArray()
    {
        return new qArray($this->get());
    }
    
    /**
     *
     * @return \qBoolean 
     */
    public function toBoolean()
    {
        return new qBoolean($this->get());
    }
    
    /**
     *
     * @return \qInteger 
     */
    public function toInteger()
    {
        return new qInteger($this->get());
    }
    
    /**
     * 
     * @return \qFloat 
     */
    public function toFloat()
    {
        return new qFloat($this->get());
    }
}
