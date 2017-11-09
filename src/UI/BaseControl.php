<?php

namespace Holabs\UI;

use Nette\Application\UI\Control;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Localization\ITranslator;

/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/ui
 * @copyright    Copyright © 2016, Tomáš Holan [www.tomasholan.eu]
 *
 * @property-read Template|\stdClass $template
 * @method Template|\stdClass getTemplate()
 */
abstract class BaseControl extends Control{
        
	/** @var ITranslator */
	private $translator;
	
	/** @var string|null */
	private $templateFile = NULL;

	/**
	 * @param ITranslator|null $translator
	 */
	public function __construct(ITranslator $translator = NULL) {
		parent::__construct();
		$this->translator = $translator;
	}

	/**
	 * @param ITranslator $translator
	 * @return self
	 */
	public function setTranslator(ITranslator $translator = NULL){
		$this->translator = $translator;
		return $this;
}
	
	/**
	 * @return ITranslator
	 */
	public function getTranslator(){
		return $this->translator;
	}
	
	/**
	 * @return string|null
	 */
	public function getTemplateFile(){
		return $this->templateFile;
	}

	/**
	 * @param string $templateFile
	 * @return self
	 */
	public function setTemplateFile($templateFile) {
		$this->templateFile = $templateFile;
		return $this;
	}



}
