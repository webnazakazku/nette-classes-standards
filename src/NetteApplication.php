<?php declare(strict_types = 1);

namespace Nette\Application;

use Nette\Bridges\ApplicationDI\ApplicationExtension;
use Nette\Bridges\ApplicationLatte;

if (class_exists(ApplicationExtension::class)) {
	class_alias(Response::class, ResponseInterface::class);

	class_alias(UI\Renderable::class, UI\RenderableInterface::class);
	class_alias(UI\SignalReceiver::class, UI\SignalReceiverInterface::class);
	class_alias(UI\StatePersistent::class, UI\StatePersistentInterface::class);
	class_alias(UI\Template::class, UI\TemplateInterface::class);
	class_alias(UI\TemplateFactory::class, UI\TemplateFactoryInterface::class);

	class_alias(ApplicationLatte\LatteFactory::class, ApplicationLatte\LatteFactoryInterface::class);
}
