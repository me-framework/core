<?php
namespace me\core;
use ReflectionClass;
/**
 * 
 */
class Container {
    /**
     * 
     */
    public static function build($class, $config = []) {
        $reflection = new ReflectionClass($class);
        $object     = $reflection->newInstanceArgs([$config]);
        return $object;
    }
}