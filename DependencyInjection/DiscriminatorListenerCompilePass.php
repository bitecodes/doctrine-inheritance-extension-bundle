<?php

namespace BiteCodes\DoctrineInheritanceExtensionBundle\DependencyInjection;

use BiteCodes\DoctrineInheritanceExtension\DiscriminatorMappingListener;
use Doctrine\ORM\Events;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

class DiscriminatorListenerCompilePass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = new Definition(DiscriminatorMappingListener::class);

        $definition->addTag('doctrine.event_listener', [
            'event' => Events::loadClassMetadata,
        ]);

        $definition->setPublic(false);

        $container->setDefinition('bite_codes.discriminator_mapping_listener', $definition);
    }
}
