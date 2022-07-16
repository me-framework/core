<?php
namespace me\core;
class Security {
    public static function generateRandomString($codeLength = 32, $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') {
        $randstring = '';
        $length     = strlen($characters) - 1;
        for ($i = 0; $i < $codeLength; $i++) {
            $index      = rand(0, $length);
            $randstring .= $characters[$index];
        }
        return $randstring;
    }
}