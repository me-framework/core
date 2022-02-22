<?php
namespace me\core;
class Cache {
    private static $_cache = [];
    public static function setCache($names, $value) {
        $v = [];
        if (!is_array($names)) {
            $names = explode('.', $names);
        }
        $keys = array_reverse($names);
        foreach ($keys as $index => $name) {
            if ($index === 0) {
                $a = $value;
            }
            else {
                $a = $v;
                $v = [];
            }
            $v[$name] = $a;
        }
        self::$_cache = array_merge_recursive(self::$_cache, $v);
    }
    public static function getCache($names) {
        if (!is_array($names)) {
            $names = explode('.', $names);
        }
        $v     = self::$_cache;
        foreach ($names as $name) {
            $v = $v[$name];
        }
        return $v;
    }
}