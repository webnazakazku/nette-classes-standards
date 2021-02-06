<?php declare(strict_types = 1);

namespace Nette\Caching;

use Nette\Bridges\CacheDI\CacheExtension;

if (class_exists(CacheExtension::class)) {
	class_alias(BulkReader::class, BulkReaderInterface::class);

	class_alias(Storage::class, StorageInterface::class);

	class_alias(Storages\Journal::class, Storages\JournalInterface::class);
}
