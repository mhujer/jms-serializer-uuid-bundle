# Symfony Bundle for UUID support for JMS Serializer [![Build Status](https://travis-ci.org/mhujer/jms-serializer-uuid-bundle.svg?branch=master)](https://travis-ci.org/mhujer/jms-serializer-uuid-bundle)

[![Latest Stable Version](https://poser.pugx.org/mhujer/jms-serializer-uuid-bundle/version.png)](https://packagist.org/packages/mhujer/jms-serializer-uuid-bundle) [![Total Downloads](https://poser.pugx.org/mhujer/jms-serializer-uuid-bundle/downloads.png)](https://packagist.org/packages/mhujer/jms-serializer-uuid-bundle) [![License](https://poser.pugx.org/mhujer/jms-serializer-uuid-bundle/license.svg)](https://packagist.org/packages/mhujer/jms-serializer-uuid-bundle) [![Coverage Status](https://coveralls.io/repos/mhujer/jms-serializer-uuid-bundle/badge.svg?branch=master)](https://coveralls.io/r/mhujer/jms-serializer-uuid-bundle?branch=master)

This Bundle integrates [mhujer/jms-serializer-uuid](https://github.com/mhujer/jms-serializer-uuid) into Symfony.


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
Works with PHP 5.6 or PHP 7.

Submitting bugs and feature requests
------------------------------------
Bugs and feature request are tracked on [GitHub](https://github.com/mhujer/jms-serializer-uuid-bundle/issues)

Author
------
[Martin Hujer](https://www.martinhujer.cz) 

Thanks [Vašek Purchart](http://www.vasekpurchart.cz/) for ideas how to test Symfony DI extension!

Changelog
----------

## 2.0.0 (2017-08-09)
- [#1](https://github.com/mhujer/jms-serializer-uuid-bundle/pull/1) Support for JMS Serializer Bundle 2.0 (thanks @VasekPurchart !)

## 1.0.0 (2015-05-XX)
- initial release
