<?php

namespace ScruffyCoder\AppModel\Contact\Entity\Details
{
    use ScruffyCoder\AppModel\Contact\Entity\EntityDetails;
    use ScruffyCoder\AppModel\Contact\Concern\EmailAddress as EmailAddressType;

    /**
     * Class EmailAddress
     *
     * @package ScruffyCoder\AppModel\Contact\Entity\Details
     */
    class EmailAddress extends EntityDetails implements EmailAddressType
    {
        /**
         * Returns false to mark this detail as not primary contact
         *
         * @return bool
         */
        public function isPrimary()
        {
            return false;
        }
    }
}