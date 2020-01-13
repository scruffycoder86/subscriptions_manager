<?php

namespace ScruffyCoder\AppModel\Contact\Concern
{
    use ScruffyCoder\AppModel\Contact\Contract\Contactable;

    interface MobileNumber extends Contactable
    {
        const TYPE_IDENTIFIER = 'mobile number';
    }
}