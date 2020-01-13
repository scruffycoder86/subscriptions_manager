<?php

namespace ScruffyCoder\Fixtures\AppModel\EntityDetails\Contact;

use ScruffyCoder\AppModel\Contact\Entity\Details\MobileNumber;

/**
 * Class ValidMobileNumber
 */
class ValidMobileNumber extends MobileNumber
{
    public function __construct()
    {
        $this->setValue('0860010111');
    }
}