<?php
// source: C:\xampp\htdocs\Pesek\app/config/config.neon 
// source: C:\xampp\htdocs\Pesek\app/config/config.local.neon 

class Container_b9d1c51268 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'Nette\Object' => [
				1 => [
					'cart.cart',
					'26_App_AdminModule_Forms_AlbumFormFactory',
					'27_App_AdminModule_Forms_ContactFormFactory',
					'28_App_AdminModule_Forms_ImageFormFactory',
					'29_App_AdminModule_Forms_PageFormFactory',
					'30_App_AdminModule_Forms_ProductFormFactory',
					'31_App_FrontModule_Forms_CartFormFactory',
					'32_App_FrontModule_Forms_OrderFormFactory',
					'33_App_FrontModule_Forms_SummaryFormFactory',
					'34_App_Model_Facades_CartFacade',
					'35_App_Model_HandleManager',
					'36_App_Model_Security_MyAuthenticate',
					'39_App_AdminModule_Forms_UploadManager',
					'40_App_AdminModule_Forms_UserFormFactory',
				],
			],
			'Kasika\ShopCart\Cart' => [1 => ['cart.cart']],
			'Kasika\ShopCart\ICartControlFactory' => [1 => ['cart.cartControlFactory']],
			'App\AdminModule\Forms\BaseFormFactory' => [
				1 => [
					'26_App_AdminModule_Forms_AlbumFormFactory',
					'27_App_AdminModule_Forms_ContactFormFactory',
					'28_App_AdminModule_Forms_ImageFormFactory',
					'29_App_AdminModule_Forms_PageFormFactory',
					'30_App_AdminModule_Forms_ProductFormFactory',
					'40_App_AdminModule_Forms_UserFormFactory',
				],
			],
			'App\AdminModule\Forms\AlbumFormFactory' => [1 => ['26_App_AdminModule_Forms_AlbumFormFactory']],
			'App\AdminModule\Forms\ContactFormFactory' => [1 => ['27_App_AdminModule_Forms_ContactFormFactory']],
			'App\AdminModule\Forms\ImageFormFactory' => [1 => ['28_App_AdminModule_Forms_ImageFormFactory']],
			'App\AdminModule\Forms\PageFormFactory' => [1 => ['29_App_AdminModule_Forms_PageFormFactory']],
			'App\AdminModule\Forms\ProductFormFactory' => [1 => ['30_App_AdminModule_Forms_ProductFormFactory']],
			'App\FrontModule\Forms\CartFormFactory' => [1 => ['31_App_FrontModule_Forms_CartFormFactory']],
			'App\FrontModule\Forms\OrderFormFactory' => [1 => ['32_App_FrontModule_Forms_OrderFormFactory']],
			'App\FrontModule\Forms\SummaryFormFactory' => [1 => ['33_App_FrontModule_Forms_SummaryFormFactory']],
			'App\Model\Facades\CartFacade' => [1 => ['34_App_Model_Facades_CartFacade']],
			'App\Model\HandleManager' => [1 => ['35_App_Model_HandleManager']],
			'Nette\Security\IAuthenticator' => [1 => ['36_App_Model_Security_MyAuthenticate']],
			'App\Model\Security\MyAuthenticate' => [1 => ['36_App_Model_Security_MyAuthenticate']],
			'Kasika\Main\IBaseFormFactory' => [1 => ['37_Kasika_Main_IBaseFormFactory']],
			'Nette\Security\IAuthorizator' => [1 => ['authorizator']],
			'Nette\Security\Permission' => [1 => ['authorizator']],
			'App\AdminModule\Forms\UploadManager' => [1 => ['39_App_AdminModule_Forms_UploadManager']],
			'App\AdminModule\Forms\UserFormFactory' => [1 => ['40_App_AdminModule_Forms_UserFormFactory']],
			'Nette\Application\UI\Presenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
					'application.19',
					'application.20',
					'application.21',
				],
			],
			'ArrayAccess' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'application.18',
				],
			],
			'App\AdminModule\Presenters\AuthPresenter' => [1 => ['application.1']],
			'App\AdminModule\Presenters\BasePresenter' => [
				1 => [
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'App\AdminModule\Presenters\GalleryPresenter' => [1 => ['application.2']],
			'App\AdminModule\Presenters\HomepagePresenter' => [1 => ['application.3']],
			'App\AdminModule\Presenters\OrderPresenter' => [1 => ['application.4']],
			'App\AdminModule\Presenters\PagePresenter' => [1 => ['application.5']],
			'App\AdminModule\Presenters\ProductPresenter' => [1 => ['application.6']],
			'App\AdminModule\Presenters\SecuredPresenter' => [1 => ['application.7']],
			'App\AdminModule\Presenters\SettingsPresenter' => [1 => ['application.8']],
			'App\FrontModule\Presenters\BasePresenter' => [
				1 => [
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
				],
			],
			'App\FrontModule\Presenters\AboutPresenter' => [1 => ['application.9']],
			'App\FrontModule\Presenters\CartPresenter' => [1 => ['application.10']],
			'App\FrontModule\Presenters\ContactPresenter' => [1 => ['application.11']],
			'App\FrontModule\Presenters\Error4xxPresenter' => [1 => ['application.12']],
			'App\FrontModule\Presenters\ErrorPresenter' => [1 => ['application.13']],
			'App\FrontModule\Presenters\GalleryPresenter' => [1 => ['application.14']],
			'App\FrontModule\Presenters\HomepagePresenter' => [1 => ['application.15']],
			'App\FrontModule\Presenters\OrderPresenter' => [1 => ['application.16']],
			'App\FrontModule\Presenters\ProductPresenter' => [1 => ['application.17']],
			'App\Presenters\BasePresenter' => [1 => ['application.18']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.18']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.19']],
			'NetteModule\ErrorPresenter' => [1 => ['application.20']],
			'NetteModule\MicroPresenter' => [1 => ['application.21']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'26_App_AdminModule_Forms_AlbumFormFactory' => 'App\AdminModule\Forms\AlbumFormFactory',
			'27_App_AdminModule_Forms_ContactFormFactory' => 'App\AdminModule\Forms\ContactFormFactory',
			'28_App_AdminModule_Forms_ImageFormFactory' => 'App\AdminModule\Forms\ImageFormFactory',
			'29_App_AdminModule_Forms_PageFormFactory' => 'App\AdminModule\Forms\PageFormFactory',
			'30_App_AdminModule_Forms_ProductFormFactory' => 'App\AdminModule\Forms\ProductFormFactory',
			'31_App_FrontModule_Forms_CartFormFactory' => 'App\FrontModule\Forms\CartFormFactory',
			'32_App_FrontModule_Forms_OrderFormFactory' => 'App\FrontModule\Forms\OrderFormFactory',
			'33_App_FrontModule_Forms_SummaryFormFactory' => 'App\FrontModule\Forms\SummaryFormFactory',
			'34_App_Model_Facades_CartFacade' => 'App\Model\Facades\CartFacade',
			'35_App_Model_HandleManager' => 'App\Model\HandleManager',
			'36_App_Model_Security_MyAuthenticate' => 'App\Model\Security\MyAuthenticate',
			'37_Kasika_Main_IBaseFormFactory' => 'Nette\Application\UI\Form',
			'39_App_AdminModule_Forms_UploadManager' => 'App\AdminModule\Forms\UploadManager',
			'40_App_AdminModule_Forms_UserFormFactory' => 'App\AdminModule\Forms\UserFormFactory',
			'application.1' => 'App\AdminModule\Presenters\AuthPresenter',
			'application.10' => 'App\FrontModule\Presenters\CartPresenter',
			'application.11' => 'App\FrontModule\Presenters\ContactPresenter',
			'application.12' => 'App\FrontModule\Presenters\Error4xxPresenter',
			'application.13' => 'App\FrontModule\Presenters\ErrorPresenter',
			'application.14' => 'App\FrontModule\Presenters\GalleryPresenter',
			'application.15' => 'App\FrontModule\Presenters\HomepagePresenter',
			'application.16' => 'App\FrontModule\Presenters\OrderPresenter',
			'application.17' => 'App\FrontModule\Presenters\ProductPresenter',
			'application.18' => 'App\Presenters\Error4xxPresenter',
			'application.19' => 'App\Presenters\ErrorPresenter',
			'application.2' => 'App\AdminModule\Presenters\GalleryPresenter',
			'application.20' => 'NetteModule\ErrorPresenter',
			'application.21' => 'NetteModule\MicroPresenter',
			'application.3' => 'App\AdminModule\Presenters\HomepagePresenter',
			'application.4' => 'App\AdminModule\Presenters\OrderPresenter',
			'application.5' => 'App\AdminModule\Presenters\PagePresenter',
			'application.6' => 'App\AdminModule\Presenters\ProductPresenter',
			'application.7' => 'App\AdminModule\Presenters\SecuredPresenter',
			'application.8' => 'App\AdminModule\Presenters\SettingsPresenter',
			'application.9' => 'App\FrontModule\Presenters\AboutPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'authorizator' => 'Nette\Security\Permission',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'cart.cart' => 'Kasika\ShopCart\Cart',
			'cart.cartControlFactory' => 'Kasika\ShopCart\CartControl',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		],
		'tags' => [
			'inject' => [
				'application.1' => TRUE,
				'application.10' => TRUE,
				'application.11' => TRUE,
				'application.12' => TRUE,
				'application.13' => TRUE,
				'application.14' => TRUE,
				'application.15' => TRUE,
				'application.16' => TRUE,
				'application.17' => TRUE,
				'application.18' => TRUE,
				'application.19' => TRUE,
				'application.2' => TRUE,
				'application.20' => TRUE,
				'application.21' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'application.8' => TRUE,
				'application.9' => TRUE,
			],
			'nette.presenter' => [
				'application.1' => 'App\AdminModule\Presenters\AuthPresenter',
				'application.10' => 'App\FrontModule\Presenters\CartPresenter',
				'application.11' => 'App\FrontModule\Presenters\ContactPresenter',
				'application.12' => 'App\FrontModule\Presenters\Error4xxPresenter',
				'application.13' => 'App\FrontModule\Presenters\ErrorPresenter',
				'application.14' => 'App\FrontModule\Presenters\GalleryPresenter',
				'application.15' => 'App\FrontModule\Presenters\HomepagePresenter',
				'application.16' => 'App\FrontModule\Presenters\OrderPresenter',
				'application.17' => 'App\FrontModule\Presenters\ProductPresenter',
				'application.18' => 'App\Presenters\Error4xxPresenter',
				'application.19' => 'App\Presenters\ErrorPresenter',
				'application.2' => 'App\AdminModule\Presenters\GalleryPresenter',
				'application.20' => 'NetteModule\ErrorPresenter',
				'application.21' => 'NetteModule\MicroPresenter',
				'application.3' => 'App\AdminModule\Presenters\HomepagePresenter',
				'application.4' => 'App\AdminModule\Presenters\OrderPresenter',
				'application.5' => 'App\AdminModule\Presenters\PagePresenter',
				'application.6' => 'App\AdminModule\Presenters\ProductPresenter',
				'application.7' => 'App\AdminModule\Presenters\SecuredPresenter',
				'application.8' => 'App\AdminModule\Presenters\SettingsPresenter',
				'application.9' => 'App\FrontModule\Presenters\AboutPresenter',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct()
	{
		parent::__construct([
			'appDir' => 'C:\xampp\htdocs\Pesek\app',
			'wwwDir' => 'C:\xampp\htdocs\Pesek\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'consoleMode' => FALSE,
			'tempDir' => 'C:\xampp\htdocs\Pesek\app/../temp',
			'database' => [
				'driver' => 'mysql',
				'host' => 'localhost',
				'dbname' => 'mvc_dbc',
				'user' => 'root',
				'password' => NULL,
			],
			'security' => [
				'salt' => '3+91^H:WF%=BanQ@9@eKXMTz5\'3MjQ1FhU.E/k)5',
				'workFactor' => 13,
				'hash' => 'sha512',
			],
			'options' => ['Color' => ['black' => 'black', 'white' => 'white']],
		]);
	}


	/**
	 * @return App\AdminModule\Forms\AlbumFormFactory
	 */
	public function createService__26_App_AdminModule_Forms_AlbumFormFactory()
	{
		$service = new App\AdminModule\Forms\AlbumFormFactory($this->getService('database.default.context'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'), $this->getService('39_App_AdminModule_Forms_UploadManager'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Forms\ContactFormFactory
	 */
	public function createService__27_App_AdminModule_Forms_ContactFormFactory()
	{
		$service = new App\AdminModule\Forms\ContactFormFactory($this->getService('database.default.context'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Forms\ImageFormFactory
	 */
	public function createService__28_App_AdminModule_Forms_ImageFormFactory()
	{
		$service = new App\AdminModule\Forms\ImageFormFactory($this->getService('database.default.context'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'), $this->getService('39_App_AdminModule_Forms_UploadManager'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Forms\PageFormFactory
	 */
	public function createService__29_App_AdminModule_Forms_PageFormFactory()
	{
		$service = new App\AdminModule\Forms\PageFormFactory($this->getService('database.default.context'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Forms\ProductFormFactory
	 */
	public function createService__30_App_AdminModule_Forms_ProductFormFactory()
	{
		$service = new App\AdminModule\Forms\ProductFormFactory($this->getService('database.default.context'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'), $this->getService('39_App_AdminModule_Forms_UploadManager'));
		return $service;
	}


	/**
	 * @return App\FrontModule\Forms\CartFormFactory
	 */
	public function createService__31_App_FrontModule_Forms_CartFormFactory()
	{
		$service = new App\FrontModule\Forms\CartFormFactory($this->getService('34_App_Model_Facades_CartFacade'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'));
		return $service;
	}


	/**
	 * @return App\FrontModule\Forms\OrderFormFactory
	 */
	public function createService__32_App_FrontModule_Forms_OrderFormFactory()
	{
		$service = new App\FrontModule\Forms\OrderFormFactory($this->getService('34_App_Model_Facades_CartFacade'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'));
		return $service;
	}


	/**
	 * @return App\FrontModule\Forms\SummaryFormFactory
	 */
	public function createService__33_App_FrontModule_Forms_SummaryFormFactory()
	{
		$service = new App\FrontModule\Forms\SummaryFormFactory($this->getService('34_App_Model_Facades_CartFacade'),
			$this->getService('37_Kasika_Main_IBaseFormFactory'));
		return $service;
	}


	/**
	 * @return App\Model\Facades\CartFacade
	 */
	public function createService__34_App_Model_Facades_CartFacade()
	{
		$service = new App\Model\Facades\CartFacade($this->getService('database.default.context'),
			$this->getService('cart.cart'));
		return $service;
	}


	/**
	 * @return App\Model\HandleManager
	 */
	public function createService__35_App_Model_HandleManager()
	{
		$service = new App\Model\HandleManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\Security\MyAuthenticate
	 */
	public function createService__36_App_Model_Security_MyAuthenticate()
	{
		$service = new App\Model\Security\MyAuthenticate($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Kasika\Main\IBaseFormFactory
	 */
	public function createService__37_Kasika_Main_IBaseFormFactory()
	{
		return new Container_b9d1c51268_Kasika_Main_IBaseFormFactoryImpl_37_Kasika_Main_IBaseFormFactory($this);
	}


	/**
	 * @return App\AdminModule\Forms\UploadManager
	 */
	public function createService__39_App_AdminModule_Forms_UploadManager()
	{
		$service = new App\AdminModule\Forms\UploadManager('C:\xampp\htdocs\Pesek\www', 'obrazky/produkty');
		return $service;
	}


	/**
	 * @return App\AdminModule\Forms\UserFormFactory
	 */
	public function createService__40_App_AdminModule_Forms_UserFormFactory()
	{
		$service = new App\AdminModule\Forms\UserFormFactory($this->getService('authorizator')->getRoles(),
			$this->getService('database.default.context'), $this->getService('37_Kasika_Main_IBaseFormFactory'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\AuthPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\AdminModule\Presenters\AuthPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\CartPresenter
	 */
	public function createServiceApplication__10()
	{
		$service = new App\FrontModule\Presenters\CartPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->cartcontrolFactory = $this->getService('cart.cartControlFactory');
		$service->cartFacade = $this->getService('34_App_Model_Facades_CartFacade');
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\ContactPresenter
	 */
	public function createServiceApplication__11()
	{
		$service = new App\FrontModule\Presenters\ContactPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__12()
	{
		$service = new App\FrontModule\Presenters\Error4xxPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__13()
	{
		$service = new App\FrontModule\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\GalleryPresenter
	 */
	public function createServiceApplication__14()
	{
		$service = new App\FrontModule\Presenters\GalleryPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->database = $this->getService('database.default.context');
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__15()
	{
		$service = new App\FrontModule\Presenters\HomepagePresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->database = $this->getService('database.default.context');
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\OrderPresenter
	 */
	public function createServiceApplication__16()
	{
		$service = new App\FrontModule\Presenters\OrderPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->summaryFormFactory = $this->getService('33_App_FrontModule_Forms_SummaryFormFactory');
		$service->orderFormFactory = $this->getService('32_App_FrontModule_Forms_OrderFormFactory');
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\ProductPresenter
	 */
	public function createServiceApplication__17()
	{
		$service = new App\FrontModule\Presenters\ProductPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->database = $this->getService('database.default.context');
		$service->cartFormFactory = $this->getService('31_App_FrontModule_Forms_CartFormFactory');
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__18()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__19()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\GalleryPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\AdminModule\Presenters\GalleryPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->imageFormFactory = $this->getService('28_App_AdminModule_Forms_ImageFormFactory');
		$service->formFactory = $this->getService('26_App_AdminModule_Forms_AlbumFormFactory');
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__20()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__21()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\AdminModule\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\OrderPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\AdminModule\Presenters\OrderPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\PagePresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new App\AdminModule\Presenters\PagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->formFactory = $this->getService('29_App_AdminModule_Forms_PageFormFactory');
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\ProductPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new App\AdminModule\Presenters\ProductPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->formFactory = $this->getService('30_App_AdminModule_Forms_ProductFormFactory');
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\SecuredPresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new App\AdminModule\Presenters\SecuredPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\SettingsPresenter
	 */
	public function createServiceApplication__8()
	{
		$service = new App\AdminModule\Presenters\SettingsPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->formFactory = $this->getService('40_App_AdminModule_Forms_UserFormFactory');
		$service->database = $this->getService('database.default.context');
		$service->contactFormFactory = $this->getService('27_App_AdminModule_Forms_ContactFormFactory');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\AboutPresenter
	 */
	public function createServiceApplication__9()
	{
		$service = new App\FrontModule\Presenters\AboutPresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->cart = $this->getService('cart.cart');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\xampp\htdocs\Pesek\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	/**
	 * @return Nette\Security\Permission
	 */
	public function createServiceAuthorizator()
	{
		$service = new Nette\Security\Permission;
		$service->addRole('admin');
		$service->addRole('guest');
		$service->addRole('user');
		$service->addResource('admin');
		$service->addResource('user');
		$service->allow('admin', 'admin');
		$service->allow(['user', 'admin'], 'user');
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\Pesek\app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\Pesek\app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Kasika\ShopCart\Cart
	 */
	public function createServiceCart__cart()
	{
		$service = new Kasika\ShopCart\Cart($this->getService('session.session')->getSection('Kasika\ShopCart\DI\Extension'));
		return $service;
	}


	/**
	 * @return Kasika\ShopCart\ICartControlFactory
	 */
	public function createServiceCart__cartControlFactory()
	{
		return new Container_b9d1c51268_Kasika_ShopCart_ICartControlFactoryImpl_cart_cartControlFactory($this);
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=localhost;dbname=mvc_dbc', 'root',
			NULL, ['lazy' => TRUE]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_b9d1c51268_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('36_App_Model_Security_MyAuthenticate'),
			$this->getService('authorizator'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		if ($tmp = $this->getByType("Nette\Http\Session", FALSE)) { $tmp->start(); Tracy\Debugger::dispatch(); };
	}

}



final class Container_b9d1c51268_Kasika_Main_IBaseFormFactoryImpl_37_Kasika_Main_IBaseFormFactory implements Kasika\Main\IBaseFormFactory
{
	private $container;


	public function __construct(Container_b9d1c51268 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Nette\Application\UI\Form;
		return $service;
	}

}



final class Container_b9d1c51268_Kasika_ShopCart_ICartControlFactoryImpl_cart_cartControlFactory implements Kasika\ShopCart\ICartControlFactory
{
	private $container;


	public function __construct(Container_b9d1c51268 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Kasika\ShopCart\CartControl($this->container->getService('cart.cart'));
		return $service;
	}

}



final class Container_b9d1c51268_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_b9d1c51268 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\xampp\htdocs\Pesek\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}
