# webnazakazku/nette-interface-standards

## Content

- [Usage - how use it](#usage)

## Usage

Aliases:

- Latte
    - `Latte\Loader` => `Latte\LoaderInterface`
    - `Latte\Macro` => `Latte\MacroInterface`
    - `Latte\Policy` => `Latte\PolicyInterface`
    - `Latte\Runtime\HtmlString` => `Latte\Runtime\HtmlStringInterface`
    - (internal) `Latte\Runtime\SnippetBridge` => `Latte\SnippetBridgeInterface`

- Nette Application
    - `Nette\Application\UI\Renderable` => `Nette\Application\UI\RenderableInterface`
    - `Nette\Application\UI\SignalReceiver` => `Nette\Application\UI\SignalReceiverInterface`
    - `Nette\Application\UI\StatePersistent` => `Nette\Application\UI\StatePersistentInterface`
    - `Nette\Application\UI\Template` => `Nette\Application\UI\TemplateInterface`
    - `Nette\Application\UI\TemplateFactory` => `Nette\Application\UI\TemplateFactoryInterface`
    - `Nette\Application\ApplicationLatte\LatteFactory` => `Nette\Application\ApplicationLatte\LatteFactoryInterface`

- Nette Caching
    - `Nette\Caching\BulkReader` => `Nette\Caching\BulkReaderInterface`
    - `Nette\Caching\Storage` => `Nette\Caching\StorageInterface`
    - `Nette\Caching\Storages\Journal` => `Nette\Caching\Storages\JournalInterface`

- Nette ComponentModel
    - `Nette\ComponentModel\IComponent` => `Nette\ComponentModel\ComponentInterface`
    - `Nette\ComponentModel\IContainer` => `Nette\ComponentModel\ContainerInterface` 

- Nette Database
    - `Nette\Database\Driver` => `Nette\Database\DriverInterface`
    - `Nette\Database\Conventions` => `Nette\Database\ConventionsInterface`
    - `Nette\Database\IStructure` => `Nette\Database\StructureInterface`

- Nette DO
    - `Nette\DI\Config\Adapter` => `Nette\DI\Config\IAdapter`

- Nette Forms
    - `Nette\Forms\Control` => `Nette\Forms\ControlInterface` 
    - `Nette\Forms\FormRenderer` => `Nette\Forms\FormRendererInterface`
    - `Nette\Forms\SubmitterControl` => `Nette\Forms\SubmitterControlInterface`

- Nette HTTP
    - `Nette\Http\IRequest` => `Nette\Http\RequestInterface` 
    - `Nette\Http\IResponse` => `Nette\Http\ResponseInterface`

- Nette Mail
    - `Nette\Mail\Mailer` => `Nette\Mail\MailerInterface` 

- Nette Routing
    - `Nette\Routing\Router` => `Nette\Routing\RouterInterface`

- Nette Schema
    - `Nette\Schema\DynamicParameter` => `Nette\Schema\DynamicParameterInterface`
    - `Nette\Schema\Schema` => `Nette\Schema\SchemaInterface`

- Nette Security
    - `Nette\Security\Authenticator` => `Nette\Security\AuthenticatorInterface` 
    - `Nette\Security\Authorizator` => `Nette\Security\AuthorizatorInterface`
    - `Nette\Security\IdentityHandler` => `Nette\Security\IdentityHandlerInterface`
    - `Nette\Security\IIdentity` => `Nette\Security\IdentityInterface`
    - `Nette\Security\Resource` => `Nette\Security\ResourceInterface`
    - `Nette\Security\Role` => `Nette\Security\RoleInterface`
    - `Nette\Security\UserStorage` => `Nette\Security\UserStorageInterface`

- Nette Tester
    - `Tester\Runner\OutputHandler` => `Tester\Runner\OutputHandlerInterface`

- Nette Utils
    - `Nette\HtmlStringable` => `Nette\HtmlStringInteface`
    - `Nette\Localization\Translator` => `Nette\Localization\TranslatorInterface`


-----

Thanks for testing, reporting and contributing.
