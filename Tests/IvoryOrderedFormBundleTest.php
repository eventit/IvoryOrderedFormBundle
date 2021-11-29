<?php

/*
 * This file is part of the Ivory Ordered Form bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\OrderedFormBundle\Tests;

use Ivory\OrderedFormBundle\IvoryOrderedFormBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class IvoryOrderedFormBundleTest extends TestCase
{
    /**
     * @var IvoryOrderedFormBundle
     */
    protected $bundle;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->bundle = new IvoryOrderedFormBundle();
    }

    public function testInheritance()
    {
        $this->assertInstanceOf(Bundle::class, $this->bundle);
    }
}
