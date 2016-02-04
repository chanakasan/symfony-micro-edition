<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use App\AppBundle;

class AppKernel extends Kernel
{
    function registerBundles()
    {
        $bundles = [
            new FrameworkBundle(),
            new TwigBundle(),
            new SensioFrameworkExtraBundle(),
            new AppBundle(),
        ];

        return $bundles;
    }

    function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config.yml');
    }

    function getRootDir()
    {
        return realpath(__DIR__."/../");
    }

    function getCacheDir()
    {
        return __DIR__."/../var/cache";
    }

    function getLogDir()
    {
        return __DIR__."/../var/log";
    }
}
