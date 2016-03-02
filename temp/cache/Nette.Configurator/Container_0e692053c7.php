<?php
// source: C:\Apache24\htdocs\company\app/config/config.neon 
// source: C:\Apache24\htdocs\company\app/config/config.local.neon 

class Container_0e692053c7 extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'database.default.connection',
					'database.default.structure',
					'database.default.context',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'nette.template',
					'security.user',
					'session.session',
					'26_App_Forms_FormFactory',
					'32_Model_FinancialStatements_Export',
					'34_Model_FinancialStatements_FormObserver',
					'35_Model_FinancialStatements_GeneratorId',
					'application.1',
					'application.2',
					'application.3',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Database\Connection' => array(
				1 => array('database.default.connection'),
			),
			'Nette\Database\IStructure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\Structure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\IConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Conventions\DiscoveredConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Context' => array(1 => array('database.default.context')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Templating\Template' => array(array('nette.template')),
			'Nette\Templating\ITemplate' => array(array('nette.template')),
			'Nette\Templating\IFileTemplate' => array(array('nette.template')),
			'Nette\Templating\FileTemplate' => array(array('nette.template')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(1 => array('routing.router')),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'App\Forms\FormFactory' => array(1 => array('26_App_Forms_FormFactory')),
			'Model\FinancialStatements\IAccountant' => array(
				1 => array(
					'27_Model_FinancialStatements_Accountant',
				),
			),
			'Model\FinancialStatements\Accountant' => array(
				1 => array(
					'27_Model_FinancialStatements_Accountant',
				),
			),
			'Model\FinancialStatements\IFinStatCommand' => array(
				1 => array(
					'28_Model_FinancialStatements_CalcBanknotesCommand',
					'29_Model_FinancialStatements_CalcPartsCommand',
					'30_Model_FinancialStatements_CheckPartsCommand',
					'31_Model_FinancialStatements_CheckSumCommand',
					'37_Model_FinancialStatements_TimeStampCommand',
				),
			),
			'Model\FinancialStatements\CalcBanknotesCommand' => array(
				1 => array(
					'28_Model_FinancialStatements_CalcBanknotesCommand',
				),
			),
			'Model\FinancialStatements\CalcPartsCommand' => array(
				1 => array(
					'29_Model_FinancialStatements_CalcPartsCommand',
				),
			),
			'Model\FinancialStatements\CheckPartsCommand' => array(
				1 => array(
					'30_Model_FinancialStatements_CheckPartsCommand',
				),
			),
			'Model\FinancialStatements\CheckSumCommand' => array(
				1 => array(
					'31_Model_FinancialStatements_CheckSumCommand',
				),
			),
			'Model\FinancialStatements\Export' => array(
				1 => array('32_Model_FinancialStatements_Export'),
			),
			'Model\FinancialStatements\FinStat' => array(
				1 => array('33_Model_FinancialStatements_FinStat'),
			),
			'Model\FinancialStatements\FormObserver' => array(
				1 => array(
					'34_Model_FinancialStatements_FormObserver',
				),
			),
			'Model\FinancialStatements\GeneratorId' => array(
				1 => array(
					'35_Model_FinancialStatements_GeneratorId',
				),
			),
			'Model\FinancialStatements\IStorage' => array(
				1 => array('36_Model_FinancialStatements_IStorage'),
			),
			'Model\FinancialStatements\TimeStampCommand' => array(
				1 => array(
					'37_Model_FinancialStatements_TimeStampCommand',
				),
			),
			'DateTime' => array(1 => array('38_Nette_Utils_DateTime')),
			'DateTimeInterface' => array(1 => array('38_Nette_Utils_DateTime')),
			'Nette\Utils\DateTime' => array(1 => array('38_Nette_Utils_DateTime')),
			'PHPExcel' => array(1 => array('PHPExcel')),
			'PHPExcel_Writer_Abstract' => array(
				1 => array('40_PHPExcel_Writer_Excel2007'),
			),
			'PHPExcel_Writer_IWriter' => array(
				1 => array(
					'40_PHPExcel_Writer_Excel2007',
					'41_PHPExcel_Writer_PDF',
				),
			),
			'PHPExcel_Writer_Excel2007' => array(
				1 => array('40_PHPExcel_Writer_Excel2007'),
			),
			'PHPExcel_Writer_PDF' => array(1 => array('41_PHPExcel_Writer_PDF')),
			'Presenters\BasePresenter' => array(array('application.1')),
			'Nette\Application\UI\Presenter' => array(array('application.1')),
			'Nette\Application\UI\Control' => array(array('application.1')),
			'Nette\Application\UI\PresenterComponent' => array(array('application.1')),
			'Nette\ComponentModel\Container' => array(array('application.1')),
			'Nette\ComponentModel\Component' => array(array('application.1')),
			'Nette\Application\UI\IRenderable' => array(array('application.1')),
			'Nette\ComponentModel\IContainer' => array(array('application.1')),
			'Nette\ComponentModel\IComponent' => array(array('application.1')),
			'Nette\Application\UI\ISignalReceiver' => array(array('application.1')),
			'Nette\Application\UI\IStatePersistent' => array(array('application.1')),
			'ArrayAccess' => array(array('application.1')),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
				),
			),
			'Presenters\FinStatementsPresenter' => array(array('application.1')),
			'NetteModule\ErrorPresenter' => array(array('application.2')),
			'NetteModule\MicroPresenter' => array(array('application.3')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'26_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'27_Model_FinancialStatements_Accountant' => 'Model\FinancialStatements\Accountant',
			'28_Model_FinancialStatements_CalcBanknotesCommand' => 'Model\FinancialStatements\CalcBanknotesCommand',
			'29_Model_FinancialStatements_CalcPartsCommand' => 'Model\FinancialStatements\CalcPartsCommand',
			'30_Model_FinancialStatements_CheckPartsCommand' => 'Model\FinancialStatements\CheckPartsCommand',
			'31_Model_FinancialStatements_CheckSumCommand' => 'Model\FinancialStatements\CheckSumCommand',
			'32_Model_FinancialStatements_Export' => 'Model\FinancialStatements\Export',
			'33_Model_FinancialStatements_FinStat' => 'Model\FinancialStatements\FinStat',
			'34_Model_FinancialStatements_FormObserver' => 'Model\FinancialStatements\FormObserver',
			'35_Model_FinancialStatements_GeneratorId' => 'Model\FinancialStatements\GeneratorId',
			'36_Model_FinancialStatements_IStorage' => 'Model\FinancialStatements\DatabaseFacade',
			'37_Model_FinancialStatements_TimeStampCommand' => 'Model\FinancialStatements\TimeStampCommand',
			'38_Nette_Utils_DateTime' => 'Nette\Utils\DateTime',
			'40_PHPExcel_Writer_Excel2007' => 'PHPExcel_Writer_Excel2007',
			'41_PHPExcel_Writer_PDF' => 'PHPExcel_Writer_PDF',
			'PHPExcel' => 'PHPExcel',
			'application.1' => 'Presenters\FinStatementsPresenter',
			'application.2' => 'NetteModule\ErrorPresenter',
			'application.3' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
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
			'nette.latte' => 'Latte\Engine',
			'nette.template' => 'Nette\Templating\FileTemplate',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		),
		'tags' => array(
			'inject' => array(
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
			),
			'nette.presenter' => array(
				'application.1' => 'Presenters\FinStatementsPresenter',
				'application.2' => 'NetteModule\ErrorPresenter',
				'application.3' => 'NetteModule\MicroPresenter',
			),
		),
		'aliases' => array(
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
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'C:\Apache24\htdocs\company\app',
			'wwwDir' => 'C:\Apache24\htdocs\company\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => FALSE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => 'C:\Apache24\htdocs\company\app/../temp',
		));
	}


	/**
	 * @return App\Forms\FormFactory
	 */
	public function createService__26_App_Forms_FormFactory()
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\Accountant
	 */
	public function createService__27_Model_FinancialStatements_Accountant()
	{
		$service = new Model\FinancialStatements\Accountant($this->getService('session.session'), $this->getService('37_Model_FinancialStatements_TimeStampCommand'),
			$this->getService('30_Model_FinancialStatements_CheckPartsCommand'), $this->getService('29_Model_FinancialStatements_CalcPartsCommand'),
			$this->getService('28_Model_FinancialStatements_CalcBanknotesCommand'), $this->getService('31_Model_FinancialStatements_CheckSumCommand'));
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\CalcBanknotesCommand
	 */
	public function createService__28_Model_FinancialStatements_CalcBanknotesCommand()
	{
		$service = new Model\FinancialStatements\CalcBanknotesCommand($this->getService('36_Model_FinancialStatements_IStorage'));
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\CalcPartsCommand
	 */
	public function createService__29_Model_FinancialStatements_CalcPartsCommand()
	{
		$service = new Model\FinancialStatements\CalcPartsCommand;
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\CheckPartsCommand
	 */
	public function createService__30_Model_FinancialStatements_CheckPartsCommand()
	{
		$service = new Model\FinancialStatements\CheckPartsCommand;
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\CheckSumCommand
	 */
	public function createService__31_Model_FinancialStatements_CheckSumCommand()
	{
		$service = new Model\FinancialStatements\CheckSumCommand($this->getService('36_Model_FinancialStatements_IStorage'));
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\Export
	 */
	public function createService__32_Model_FinancialStatements_Export()
	{
		$service = new Model\FinancialStatements\Export($this->getService('40_PHPExcel_Writer_Excel2007'), $this->getService('41_PHPExcel_Writer_PDF'),
			$this->getService('36_Model_FinancialStatements_IStorage'));
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\FinStat
	 */
	public function createService__33_Model_FinancialStatements_FinStat()
	{
		$service = new Model\FinancialStatements\FinStat;
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\FormObserver
	 */
	public function createService__34_Model_FinancialStatements_FormObserver()
	{
		$service = new Model\FinancialStatements\FormObserver($this->getService('36_Model_FinancialStatements_IStorage'),
			$this->getService('27_Model_FinancialStatements_Accountant'), $this->getService('33_Model_FinancialStatements_FinStat'));
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\GeneratorId
	 */
	public function createService__35_Model_FinancialStatements_GeneratorId()
	{
		$service = new Model\FinancialStatements\GeneratorId($this->getService('36_Model_FinancialStatements_IStorage'));
		return $service;
	}


	/**
	 * @return Model\FinancialStatements\IStorage
	 */
	public function createService__36_Model_FinancialStatements_IStorage()
	{
		return new Container_0e692053c7_Model_FinancialStatements_IStorageImpl_36_Model_FinancialStatements_IStorage($this);
	}


	/**
	 * @return Model\FinancialStatements\TimeStampCommand
	 */
	public function createService__37_Model_FinancialStatements_TimeStampCommand()
	{
		$service = new Model\FinancialStatements\TimeStampCommand($this->getService('38_Nette_Utils_DateTime'));
		return $service;
	}


	/**
	 * @return Nette\Utils\DateTime
	 */
	public function createService__38_Nette_Utils_DateTime()
	{
		$service = new Nette\Utils\DateTime;
		return $service;
	}


	/**
	 * @return PHPExcel_Writer_Excel2007
	 */
	public function createService__40_PHPExcel_Writer_Excel2007()
	{
		$service = new PHPExcel_Writer_Excel2007($this->getService('PHPExcel'));
		return $service;
	}


	/**
	 * @return PHPExcel_Writer_PDF
	 */
	public function createService__41_PHPExcel_Writer_PDF()
	{
		$service = new PHPExcel_Writer_PDF($this->getService('PHPExcel'));
		return $service;
	}


	/**
	 * @return PHPExcel
	 */
	public function createService__PHPExcel()
	{
		$service = new PHPExcel;
		return $service;
	}


	/**
	 * @return Presenters\FinStatementsPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new Presenters\FinStatementsPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->export = $this->getService('32_Model_FinancialStatements_Export');
		$service->generatorId = $this->getService('35_Model_FinancialStatements_GeneratorId');
		$service->formObserver = $this->getService('34_Model_FinancialStatements_FormObserver');
		$service->finStatStorageFactory = $this->getService('36_Model_FinancialStatements_IStorage');
		$service->formFactory = $this->getService('26_App_Forms_FormFactory');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Nette:Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('application.presenterFactory')));
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\Apache24\htdocs\company\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(array('*' => '*Module\Presenters\*Presenter'));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('C:\Apache24\htdocs\company\app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\Apache24\htdocs\company\app/../temp/cache', $this->getService('cache.journal'));
		return $service;
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
		$service = new Nette\Database\Connection('mysql:host=localhost;dbname=company', 'root', '*ComforT71600*', array('lazy' => TRUE));
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'), $this->getService('database.default.structure'),
			$this->getService('database.default.conventions'), $this->getService('cache.storage'));
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
		$service = new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
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
		$service->setProxy(array());
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
		return new Container_0e692053c7_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
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
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('C:\Apache24\htdocs\company\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createServiceNette__template()
	{
		$service = new Nette\Templating\FileTemplate;
		trigger_error('Service nette.template is deprecated.', 16384);
		$service->registerFilter($this->getService('latte.latteFactory')->create());
		$service->registerHelperLoader('Nette\Templating\Helpers::loader');
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
		$service = new Nette\Security\User($this->getService('security.userStorage'));
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
		date_default_timezone_set('Europe/Bratislava');
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = TRUE;
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
	}

}



final class Container_0e692053c7_Model_FinancialStatements_IStorageImpl_36_Model_FinancialStatements_IStorage implements Model\FinancialStatements\IStorage
{
	private $container;


	public function __construct(Container_0e692053c7 $container)
	{
		$this->container = $container;
	}


	public function create(): Model\FinancialStatements\DatabaseFacade
	{
		$service = new Model\FinancialStatements\DatabaseFacade($this->container->getService('database.default.context'));
		return $service;
	}

}



final class Container_0e692053c7_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_0e692053c7 $container)
	{
		$this->container = $container;
	}


	public function create(): Latte\Engine
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\Apache24\htdocs\company\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}
