<?php

/**
 * Abstract class BaseServer
 * --------------------------------------------
 * This class provides a static method 'agent' that returns an instance of the class that invokes it.
 * It serves as a base class that can be extended by other classes to provide additional functionality.
 * 
 * Usage:
 * ------
 * To use this class, simply extend it in a new class, and you can then invoke the 'agent' method,
 * which will return an instance of the child class.
 * 
 * Example:
 * --------
 * // Define a new class that extends BaseServer
 * class MyClass extends BaseServer {
 *     // Add additional functionalities if needed
 * }
 * 
 * // Call the static 'agent' method of the MyClass class
 * $instance = MyClass::agent();
 * 
 * Note:
 * -----
 * This class is abstract, which means it cannot be instantiated directly. It can only be used as a
 * base class for creating new classes that extend its functionality.
 */
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
