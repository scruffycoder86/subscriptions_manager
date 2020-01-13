<?php

namespace ScruffyCoder\AppModel\Contact\Entity
{
    /**
     * Class EntityDetails
     *
     * @package ScruffyCoder\AppModel\Entity
     */
    abstract class EntityDetails
    {
        /**
         * This detail
         *
         * @var $value
         */
        private $value;

        /**
         * Returns currently defined type identifier
         *
         * @return mixed
         */
        public function getType()
        {
            return self::TYPE_IDENTIFIER;
        }

        /**
         * @return mixed
         */
        public function getValue()
        {
            return $this->value;
        }

        /**
         * @param mixed $value
         * @return EntityDetails
         */
        protected function setValue($value)
        {
            $this->value = $value;
            return $this;
        }
    }
}