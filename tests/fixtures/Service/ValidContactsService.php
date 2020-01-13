<?php

namespace ScruffyCoder\Fixtures\AppModel\Service;

use Faker\DefaultGenerator;

use ScruffyCoder\AppModel\Contact\Contract\Contactable;
use ScruffyCoder\AppModel\Contact\Contract\ContactService;
use ScruffyCoder\Fixtures\AppModel\EntityDetails\Contact\ValidEmailAddress;
use ScruffyCoder\Fixtures\AppModel\EntityDetails\Contact\ValidMobileNumber;

/**
 * Class ValidContactsService
 *
 * @package ScruffyCoder\UnitTests\Fixture\Service
 */
class ValidContactsService implements ContactService
{
    protected $faker;

    public function __construct(DefaultGenerator $faker)
    {
        $this->faker = $faker;
    }

    /**
     * @return mixed
     */
    public function getEntityDetails()
    {
        return [
            new ValidMobileNumber(),
            new ValidEmailAddress(),
        ];
    }
}

