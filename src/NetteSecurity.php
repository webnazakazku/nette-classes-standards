<?php declare(strict_types = 1);

namespace Nette\Security;

use Nette\Bridges\SecurityDI\SecurityExtension;

if (class_exists(SecurityExtension::class)) {
	class_alias(Authenticator::class, AuthenticatorInterface::class);
	class_alias(Authorizator::class, AuthorizatorInterface::class);
	class_alias(IdentityHandler::class, IdentityHandlerInterface::class);
	class_alias(IIdentity::class, IdentityInterface::class);
	class_alias(Resource::class, ResourceInterface::class);
	class_alias(Role::class, RoleInterface::class);
	class_alias(UserStorage::class, UserStorageInterface::class);
}
