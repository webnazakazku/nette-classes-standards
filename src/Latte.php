<?php

declare(strict_types = 1);

namespace Latte;

if (Engine::class) {
	class_alias(Loader::class, LoaderInterface::class);
	class_alias(Macro::class, MacroInterface::class);
	class_alias(Policy::class, PolicyInterface::class);

	class_alias(Runtime\HtmlStringable::class, Runtime\HtmlStringInterface::class);
	class_alias(Runtime\SnippetBridge::class, Runtime\SnippetBridgeInterface::class);
}
