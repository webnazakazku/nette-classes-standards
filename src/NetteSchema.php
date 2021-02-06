<?php declare(strict_types = 1);

namespace Nette\Schema;

if (class_exists(Processor::class)) {
	class_alias(DynamicParameter::class, DynamicParameterInterface::class);
	class_alias(Schema::class, SchemaInterface::class);
}
