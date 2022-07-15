<?php
namespace me\core\exceptions;
use me\core\Exception as BaseException;
class HttpNotFound extends BaseException {
    public function __construct(string $message = "") {
        return parent::__construct($message, 404);
    }
}