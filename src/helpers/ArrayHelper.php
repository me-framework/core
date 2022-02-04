<?php
namespace me\core\helpers;
use me\core\Helper;
class ArrayHelper extends Helper {
    /**
     * 
     */
    public static function configure($object, $properties) {
        foreach ($properties as $name => $value) {
            $object->$name = $value;
        }
        return $object;
    }
    /**
     * @param array $array Array
     * @param mixed $name Array Key
     * @param mixed $defaultValue Default Value
     * @return mixed Array Value Or Default Value
     */
    public static function Remove(array &$array, $name, $defaultValue = null) {
        if (isset($array[$name])) {
            $data = $array[$name];
            unset($array[$name]);
            return $data;
        }
        return $defaultValue;
    }
}