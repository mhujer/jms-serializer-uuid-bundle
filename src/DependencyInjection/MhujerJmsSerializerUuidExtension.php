<?php

declare(strict_types = 1);

namespace Mhujer\JmsSerializer\Uuid\SymfonyBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class MhujerJmsSerializerUuidExtension extends \Symfony\Component\HttpKernel\DependencyInjection\Extension
{

	private const ALIAS = 'mhujer_jms_serializer_uuid';

	/**
	 * @param mixed[][] $configs
	 * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/config'));
		$loader->load('services.yml');
	}

	/**
	 * @return string
	 */
	public function getAlias()
	{
		return self::ALIAS;
	}

}
