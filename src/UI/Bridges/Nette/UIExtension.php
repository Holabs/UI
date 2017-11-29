<?php


namespace Holabs\UI\Bridges\Nette;

use Holabs\UI\Form;
use Holabs\UI\FormFactory;
use Nette\DI\Extensions\ExtensionsExtension;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/ui
 * @copyright    Copyright © 2016, Tomáš Holan [www.tomasholan.eu]
 */
class UIExtension extends ExtensionsExtension {

	/** @var array */
	public $defaults = [
		'form-factory' => [
			'class' => Form::class,
		],
	];
	
	public function loadConfiguration() {
		$this->validateConfig($this->defaults);
		$config = $this->getConfig();
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('form_factory'))
			->setFactory(FormFactory::class, [$config['form-factory']['class']]);
	}


}
