<?php
namespace me\core\components;
use ReflectionClass;
use me\core\Component;
use me\core\helpers\ArrayHelper;
class Container extends Component {
    public function build($id) {
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