<?php declare(strict_types = 1);

namespace Nette\Http;

use Nette\Bridges\HttpDI\HttpExtension;

if (class_exists(HttpExtension::class)) {
	class_alias(IRequest::class, RequestInterface::class);
	class_alias(IResponse::class, ResponseInterface::class);
}
