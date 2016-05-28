<?php

namespace Mhujer\JmsSerializer\Uuid\SymfonyBundle\DependencyInjection;

use Mhujer\JmsSerializer\Uuid\UuidSerializerHandler;

class MhujerJmsSerializerUuidExtensionTest extends \Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase
{

	/**
	 * @return \Symfony\Component\DependencyInjection\Extension\ExtensionInterface[]
	 */
	protected function getContainerExtensions()
	{
		return [
			new MhujerJmsSerializerUuidExtension(),
		];
	}

	public function testRegisterSerializerHandler()
	{
		$this->load();

		$this->assertContainerBuilderHasService(
			'mhujer.jms_serializer.uuid.uuid_serializer_handler',
			UuidSerializerHandler::class
		);
		$this->assertContainerBuilderHasServiceDefinitionWithTag(
			'mhujer.jms_serializer.uuid.uuid_serializer_handler',
			'jms_serializer.subscribing_handler'
		);

		$this->compile();
	}

}
