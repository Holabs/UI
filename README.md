Holabs\UI
=========

This is small Nette Framework package with `BaseControl` class and form factory using translator and Nextras bootstrap 3 renderer

Installation
------------

**Requirements:**
 - php 5.6+
 - [nette/application](https://github.com/nette/application)
 - [nette/di](https://github.com/nette/di)
 - [nette/utils](https://github.com/nette/utils)
 - [nextras/forms](https://github.com/nextras/forms)

```sh
composer require holabs\ui
```

Configuration
-------------
You can define your Form class which will be created by formFactory default is `Holabs\UI\Form`
```yaml
extensions:
	holabs.ui: Holabs\UI\Bridges\Nette\UIExtension
	
holabs.ui:
	form-factory:
		class: 'Holabs\UI\Form'
```
