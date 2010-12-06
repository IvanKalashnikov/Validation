<?php

namespace Respect\Validation\Rules;

class Alnum extends Alpha
{

    protected $additionalChars = '';
    protected $stringFormat = '#^[a-zA-Z0-9]+$#';

    public function assert($input)
    {
        if (!$this->validate($input))
            throw $this->getException() ? : $this->createException()
                    ->configure($input, $this->additionalChars);
        return true;
    }

}