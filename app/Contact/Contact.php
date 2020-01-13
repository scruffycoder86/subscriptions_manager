<?php

namespace ScruffyCoder\AppModel\Contact
{
    use ScruffyCoder\AppModel\Contact\Contract\Contactable;

    /**
     * Class Contact
     *
     * A Contact knows how to create itself and only itself
     *
     * @package ScruffyCoder\AppModel\Contact
     */
    abstract class Contact
    {
        /**
         * An accepted RCF-Compliant string representation
         *
         * @var $id
         */
        private $id;

        /**
         * Object Types that represent Contactable Interfaces
         *
         *
         * @var array $details[]
         */
        private $details = [];

        /**
         * A Factory Method to create itself
         *
         * @param array $options
         * @return Contact
         */
        public static function create(array $options)
        {
            return (new static())->setDetails($options);
        }

        /**
         *
         * @return Contactable[]
         */
        abstract public function getDetails(): Contactable;

        /**
         * @param array $details
         * @return Contact
         */
        private function setDetails(array $details): Contact
        {
            $this->details = $details;
            return $this;
        }
    }
}