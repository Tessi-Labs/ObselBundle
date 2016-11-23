<?php

/*
 * This file is part of the ObselBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TessiLabs\ObselBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class ObselExtension extends Extension
{
    /**
     * @var array
     */
    private static $doctrineDrivers = array(
        'orm' => array(
            'registry' => 'doctrine',
            'tag' => 'doctrine.event_subscriber',
        ),
        'mongodb' => array(
            'registry' => 'doctrine_mongodb',
            'tag' => 'doctrine_mongodb.odm.event_subscriber',
        ),
    );

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();

        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        var_dump($config); die;

        if (isset(self::$doctrineDrivers[$config['db_driver']])) {
            $loader->load('doctrine.xml');
            $container->setAlias('obsel.doctrine_registry', new Alias(self::$doctrineDrivers[$config['db_driver']]['registry'], false));
        } else {
            $loader->load(sprintf('%s.xml', $config['db_driver']));
        }
        $container->setParameter($this->getAlias().'.backend_type_'.$config['db_driver'], true);

        if (isset(self::$doctrineDrivers[$config['db_driver']])) {
            $definition = $container->getDefinition('obsel.object_manager');
            $definition->setFactory(array(new Reference('obsel.doctrine_registry'), 'getManager'));
        }
    }
}