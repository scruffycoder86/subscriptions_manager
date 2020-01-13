<?php

namespace ScruffyCoder\AppModel
{
    use Symfony\Component\HttpKernel\Kernel;
    use Symfony\Component\Config\Loader\LoaderInterface;

    class SubscriptionsApi extends Kernel
    {
        public function registerBundles()
        {
            return [
                new \Symfony\Bundle\FrameworkBundle\FrameworkBundle\FrameworkBundle(),
            ];
        }

        public function registerContainerConfiguration(LoaderInterface $loader)
        {
            // TODO: Implement registerContainerConfiguration() method.
        }

        public function getCacheDir()
        {
            return __DIR__ . '/../assets/storage/' . $this->getEnvironment();
        }

        public function getLogDir()
        {
            return __DIR__ . '/../assets/storage/';
        }
    }
}