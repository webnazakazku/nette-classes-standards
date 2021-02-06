<?php declare(strict_types = 1);

namespace Nette\DI\Config;

use Nette\DI\Extensions\DIExtension;

if (class_exists(DIExtension::class)) {
	class_alias(Adapter::class, AdapterInterface::class);
}
