<?php


namespace Holabs\UI;

use Nette\Application\UI\Form;
use Nette\InvalidStateException;
use Nette\Localization\ITranslator;
use Nextras\Forms\Rendering\Bs3FormRenderer;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/ui
 * @copyright    Copyright © 2016, Tomáš Holan [www.tomasholan.eu]
 */
class FormFactory {

	/** @var  string */
	protected $class;
	
	/** @var  ITranslator|null */
	protected $translator;

	/**
	 * @param ITranslator|null $translator
	 */
	public function __construct(ITranslator $translator = NULL) {
		if (!class_exists($class)) {
			throw new InvalidStateException("Class {$class} not exists");
		}

		if (!is_subclass_of($class, Form::class)) {
			throw new InvalidStateException("Class {$class} must be child of " . Form::class);
		}

		$this->class = $class;
		$this->translator = $translator;
	}


	/**
	 * @param ITranslator|null $translator
	 * @return Form
	 */
	public function create(ITranslator $translator = NULL){
		$name = $this->class;
		/** @var Form $form */
		$form = new $name();
		$form->setRenderer(new Bs3FormRenderer());
		$form->setTranslator($translator === NULL ? $this->translator : $translator);
		return $form;
	}

}
