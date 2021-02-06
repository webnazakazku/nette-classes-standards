<?php declare(strict_types = 1);

namespace Tester;

if (class_exists(Runner\Runner::class)) {
	class_alias(Runner\OutputHandler::class, Runner\OutputHandlerInterface::class);
}
