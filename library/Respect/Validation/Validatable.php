<?php

namespace Respect\Validation;

use \Exception;

interface Validatable
{

    public function assert($input);

    public function validate($input);

    public function check($input);

    public function createException();

    public function getException();

    public function setException(Exception $e);
}