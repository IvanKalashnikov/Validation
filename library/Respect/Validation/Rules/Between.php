<?php

namespace Respect\Validation\Rules;

use Respect\Validation\Exceptions\ComponentException;
use Respect\Validation\Exceptions\ValidationException;

class Between extends AllOf
{

    public function __construct($min=null, $max=null)
    {
        if (!is_null($min) && !is_null($max) && $min > $max)
            throw new ComponentException(
                sprintf(
                    '%s cannot be less than  %s for validation', $min, $max
                )
            );
        if (!is_null($min))
            $this->addRule(new Min($min));
        if (!is_null($max))
            $this->addRule(new Max($max));
    }

}