<?php

namespace Loadsman\SymfonyPlugin\tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\app\AppKernel;

class RuleRepositoryTest extends KernelTestCase
{
    protected function setUp()
    {
        self::bootKernel();

        $this->router = static::$kernel->getContainer()->get('router');
    }

    public function test_get_all_routes()
    {
        dump($this->router);
    }
}