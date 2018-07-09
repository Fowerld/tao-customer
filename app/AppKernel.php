<?php

namespace App;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;

/**
 * Class AppKernel
 *
 * @package App
 */
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new DoctrineBundle(),
        ];
    }
}
