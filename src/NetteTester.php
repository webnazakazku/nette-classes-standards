<?php

declare(strict_types = 1);

namespace Tester;

use Tester\Runner;

if (class_exists(Runner\OutputHandler::class)) {
	class_alias(Runner\OutputHandler::class, Runner\OutputHandlerInterface::class);
}
