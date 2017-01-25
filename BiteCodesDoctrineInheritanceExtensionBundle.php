<?php

namespace BiteCodes\DoctrineInheritanceExtensionBundle;

use BiteCodes\DoctrineInheritanceExtensionBundle\DependencyInjection\DiscriminatorListenerCompilePass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BiteCodesDoctrineInheritanceExtensionBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new DiscriminatorListenerCompilePass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 128);
    }
}
