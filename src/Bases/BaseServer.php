<?php

namespace Rmunate\InfoServer\Bases;

abstract class BaseServer
{
    /**
     * Static method 'agent'
     * ----------------------
     * This method returns an instance of the class that invokes it.
     *
     * @return static An instance of the class that invokes the method.
     *
     * Note:
     * -----
     * The use of 'static' as the return type ensures that when this method is invoked from a child class,
     * it will return an instance of the child class, even if the method is inherited by a parent class.
     * This allows each child class to have its own instance instead of the instance of the base class.
     */
    public static function agent()
    {
        return new static();
    }
}
