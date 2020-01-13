<?php

namespace ScruffyCoder\AppModel\Contact\Contract
{
    /**
     * Interface Contactable
     *
     * @package ScruffyCoder\AppModel\Contact\Contract
     */
    interface Contactable
    {
        /**
         * @return bool
         */
        public function isPrimary();
    }
}