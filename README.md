# Symfony Bundle for UUID support for JMS Serializer [![Build Status](https://travis-ci.org/mhujer/jms-serializer-uuid-bundle.svg?branch=master)](https://travis-ci.org/mhujer/jms-serializer-uuid-bundle)

[![Latest Stable Version](https://poser.pugx.org/mhujer/jms-serializer-uuid-bundle/version.png)](https://packagist.org/packages/mhujer/jms-serializer-uuid-bundle) [![Total Downloads](https://poser.pugx.org/mhujer/jms-serializer-uuid-bundle/downloads.png)](https://packagist.org/packages/mhujer/jms-serializer-uuid-bundle) [![License](https://poser.pugx.org/mhujer/jms-serializer-uuid-bundle/license.svg)](https://packagist.org/packages/mhujer/jms-serializer-uuid-bundle) [![Coverage Status](https://coveralls.io/repos/mhujer/jms-serializer-uuid-bundle/badge.svg?branch=master)](https://coveralls.io/r/mhujer/jms-serializer-uuid-bundle?branch=master)

This Bundle integrates [mhujer/jms-serializer-uuid](https://github.com/mhujer/jms-serializer-uuid) into Symfony.


## Note

Instead of using this bundle, you can register the handler manually in the `config/services.yaml` file:

```yaml
services:
    Mhujer\JmsSerializer\Uuid\UuidSerializerHandler:
        tags:
            - { name: jms_serializer.subscribing_handler }


Usage
----
1. Install the latest version with `composer require mhujer/jms-serializer-uuid-bundle`
2. Register the Bundle in the `AppKernel.php`:

```php
<?php

class AppKernel extends \Symfony\Component\HttpKernel\Kernel
{

	...

	public function registerBundles()
	{
		$bundles = [
			...
			new Mhujer\JmsSerializer\Uuid\SymfonyBundle\MhujerJmsSerializerUuidBundle()
		];

	}

```

Then you can use the `uuid` type for serialization or deserialization:

```php
<?php

use JMS\Serializer\Annotation as JMS;

class User
{

	/**
	 * @JMS\Type("uuid")
	 * @var \Ramsey\Uuid\UuidInterface
	 */
	public $id;

}
```

Requirements
------------
Works with PHP 7.2 or higher.

Submitting bugs and feature requests
------------------------------------
Bugs and feature request are tracked on [GitHub](https://github.com/mhujer/jms-serializer-uuid-bundle/issues)

Author
------
[Martin Hujer](https://www.martinhujer.cz) 

Thanks [Vašek Purchart](http://www.vasekpurchart.cz/) for ideas how to test Symfony DI extension!

Changelog
----------

## 4.0.0 (2018-11-27)
- [#6](../../pull/6) dropped support for PHP 7.1 as it is no longer supported
- [#7](../../pull/7) `jms/serializer` 2.0 support (thanks @simPod !)

## 3.0.0 (2018-01-07)
- [#3](https://github.com/mhujer/jms-serializer-uuid-bundle/pull/3) Added Symfony 4.0 support, dropped support for Symfony 2. Requires PHP 7.1.

## 2.0.0 (2017-08-09)
- [#1](https://github.com/mhujer/jms-serializer-uuid-bundle/pull/1) Support for JMS Serializer Bundle 2.0 (thanks @VasekPurchart !)

## 1.0.0 (2015-05-XX)
- initial release
