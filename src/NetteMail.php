<?php declare(strict_types = 1);

namespace Nette\Mail;

use Nette\Bridges\MailDI\MailExtension;

if (class_exists(MailExtension::class)) {
	class_alias(Mailer::class, MailerInterface::class);
	class_alias(Signer::class, SignerInterface::class);
}
