<?php

namespace ScruffyCoder\AppModel\Contact\Concern
{
    use ScruffyCoder\AppModel\Contact\Contract\Contactable;

    interface EmailAddress extends Contactable
    {
        const TYPE_IDENTIFIER = 'email address';
    }
}