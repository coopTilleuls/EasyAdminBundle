<?php

namespace EasyCorp\Bundle\EasyAdminBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SetDefaultParametersPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (! $container->hasParameter(EasyAdminExtension::PARAMETER_HUB)) {
            $container->setParameter(EasyAdminExtension::PARAMETER_HUB, 'default');
        }
    }
}
