<?php

namespace ScruffyCoder\Functional\ContactAppModel\ContactDetails;

use Faker\DefaultGenerator;
use PHPUnit\Framework\TestCase;
use ScruffyCoder\AppModel\Contact\Contract\Contactable;
use ScruffyCoder\Fixtures\AppModel\Service\ValidContactsService;

/**
 * Class ValidContactDetailsTest
 *
 * Test Case for valid Contact Details
 *
 * @package ScruffyCoder\Functional\ContactAppModel\ContactDetails
 */
class ValidContactDetailsTest extends TestCase
{
    /**
     * @param $contactables
     * @dataProvider validContactDetails
     * @test
     */
    public function it_has_valid_contact_details($contactables)
    {
        \array_map(function($contactable){
            self::assertInstanceOf(Contactable::class, $contactable);
        }, $contactables);
    }

    /** ContactDetailsDataProvider implementation */
    public function validContactDetails()
    {
        return [
            [
                (new ValidContactsService(
                        new DefaultGenerator()
                    )
                )->getEntityDetails()
            ]
        ];
    }
}