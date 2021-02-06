<?php

declare(strict_types = 1);

namespace Nette\Schema;

if (class_exists(Schema::class)) {
	class_alias(DynamicParameter::class, DynamicParameterInterface::class);
	class_alias(Schema::class, SchemaInterface::class);
}
