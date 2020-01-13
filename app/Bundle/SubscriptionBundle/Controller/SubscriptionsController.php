<?php

namespace ScruffyCoder\AppModel\Bundle\SubscriptionBundle\Controller
{
    use Symfony\Component\HttpFoundation\Request;
    use ScruffyCoder\AppModel\Contact\Contract\ContactService;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    /**
     * Class SubscriptionsController
     *
     * @package ScruffyCoder\AppModel\Bundle\SubscriptionBundle\Controller
     */
    class SubscriptionsController extends AbstractController
    {
        /**
         * @var ContactService
         */
        private $contactService;

        /**
         * SubscriptionsController constructor.
         *
         * @param ContactService $contactService
         */
        public function __construct(ContactService $contactService)
        {
            $this->contactService = $contactService;
        }

        /**
         * @param Request $request
         */
        public function indexAction(Request $request)
        {

        }
    }
}