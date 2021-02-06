<?php declare(strict_types = 1);

namespace Latte;

/**
 * @internal
 */
interface SnippetBridgeInterface extends Runtime\SnippetBridge
{

}

if (class_exists(Engine::class)) {
	class_alias(Loader::class, LoaderInterface::class);
	class_alias(Macro::class, MacroInterface::class);
	class_alias(Policy::class, PolicyInterface::class);

	class_alias(Runtime\HtmlStringable::class, Runtime\HtmlStringInterface::class);
}
