<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class TestKernel extends Kernel
{
    // TODO WIP. Cause having no idea how to test outside of symfony,

    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            //new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            //new Symfony\Bundle\TwigBundle\TwigBundle(),
            //new Symfony\Bundle\MonologBundle\MonologBundle(),
            //new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            //new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            //new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            //new AppBundle\AppBundle(),
            //new \Loadsman\SymfonyPlugin\LoadsmanSymfonyBundle(),
        ];

            //$bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            //$bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            //$bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            //$bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();

        return $bundles;
    }

    //public function getRootDir()
    //{
    //    return __DIR__;
    //}
    //
    //public function getCacheDir()
    //{
    //    return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    //}
    //
    //public function getLogDir()
    //{
    //    return dirname(__DIR__).'/var/logs';
    //}
    //

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        dump(__DIR__);
        dump(__CLASS__);
        die();

        $loader->load(__DIR__.'/../Resources/config_test.yml');
    }
}
