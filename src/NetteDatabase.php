<?php

declare(strict_types = 1);

namespace Nette\Database;

use Nette\Bridges\DatabaseDI\DatabaseExtension;

if (class_exists(DatabaseExtension::class)) {
	class_alias(Driver::class, DriverInterface::class);
	class_alias(Conventions::class, ConventionsInterface::class);
	class_alias(IStructure::class, StructureInterface::class);
}
