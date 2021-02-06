<?php declare(strict_types = 1);

namespace Nette\ComponentModel;

if (class_exists(Component::class)) {
	class_alias(IComponent::class, ComponentInterface::class);
	class_alias(IContainer::class, ContainerInterface::class);
}
