<?php

namespace ScruffyCoder\AppModel\Contact\Entity\Details
{
    use ScruffyCoder\AppModel\Contact\Entity\EntityDetails;
    use ScruffyCoder\AppModel\Contact\Concern\MobileNumber as MobileNumberType;

    /**
     * Class MobileNumber
     *
     * @package ScruffyCoder\AppModel\Contact\Entity\Details
     */
    class MobileNumber extends EntityDetails implements MobileNumberType
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