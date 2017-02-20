<?php


namespace Holabs\UI\Bridges\Nette;

use Holabs\UI\FormFactory;
use Nette\DI\Extensions\ExtensionsExtension;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/ui
 * @copyright    Copyright © 2016, Tomáš Holan [www.tomasholan.eu]
 */
class UIExtension extends ExtensionsExtension {

	public function loadConfiguration() {
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('form_factory'))
			->setClass(FormFactory::class);
	}


}