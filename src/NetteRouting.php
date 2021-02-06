<?php declare(strict_types = 1);

namespace Nette\Routing;

if (class_exists(SimpleRouter::class)) {
	class_alias(Router::class, RouterInterface::class);
}
