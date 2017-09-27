<?php namespace Ahir\Facades;

class Facade {

    /**
     * Instances for original classes
     *
     * @var array
     */
    private static $instances = array();

    /**
     * Call static magic method
     *
     * @param  string       $method
     * @param  arrray       $arguments
     */
    public static function __callStatic($method, $arguments)
    {
        $connector = static::getFacadeAccessor();
        if (!isset(self::$instances[$connector])) {
            self::$instances[$connector] = new $connector;
        }
        return call_user_func_array(array(self::$instances[$connector], $method), $arguments);
    }

}