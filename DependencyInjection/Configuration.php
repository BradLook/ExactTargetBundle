<?php

namespace Hautelook\ExactTargetBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('exact_target');

        $rootNode
            ->children()
                ->scalarNode('appsignature')
                    ->defaultValue('abcd')
                ->end()
                ->scalarNode('clientid')
                    ->defaultValue(1)
                ->end()
                ->scalarNode('clientsecret')
                    ->defaultValue(1)
                ->end()
                ->scalarNode('defaultwsdl')
                    ->defaultValue('https://webservice.exacttarget.com/etframework.wsdl')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
