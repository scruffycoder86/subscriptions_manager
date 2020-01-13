<?php

namespace ScruffyCoder\Fixtures\AppModel\EntityDetails\Contact;

use ScruffyCoder\AppModel\Contact\Entity\Details\EmailAddress;

/**
 * Class ValidEmailAddress
 */
class ValidEmailAddress extends EmailAddress
{
    public function __construct()
    {
        $this->setValue('sikoluyanda@gmail.com');
    }
}