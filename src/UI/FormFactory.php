<?php


namespace Holabs\UI;

use Nette\Localization\ITranslator;
use Nextras\Forms\Rendering\Bs3FormRenderer;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/ui
 * @copyright    Copyright © 2016, Tomáš Holan [www.tomasholan.eu]
 */
class FormFactory {

	/** @var  ITranslator|null */
	protected $translator;

	/**
	 * @param ITranslator|null $translator
	 */
	public function __construct(ITranslator $translator = NULL) {
		$this->translator = $translator;
	}


	/**
	 * @param ITranslator|null $translator
	 * @return Form
	 */
	public function create(ITranslator $translator = NULL){
		$form = new Form();
		$form->setRenderer(new Bs3FormRenderer());
		$form->setTranslator($translator === NULL ? $this->translator : $translator);
		return $form;
	}

}
