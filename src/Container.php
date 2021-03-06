<?php
namespace me\core;
use ReflectionClass;
use me\helpers\ArrayHelper;
class Container {
    public static function build($id) {
        if (is_string($id)) {
            $id = ['class' => $id];
        }
        if (is_array($id) && isset($id['class'])) {
            $class      = ArrayHelper::Remove($id, 'class');
            $reflection = new ReflectionClass($class);
            $object     = $reflection->newInstanceArgs([$id]);
            return $object;
        }
        return null;
    }
}