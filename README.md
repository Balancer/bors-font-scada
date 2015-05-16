# Scada v1.1 font assets for local storage usage with BORS©v2 framework

## Install

    composer require bors/font-scada=dev-master

## Usage with composer.json

```json
    "require": {
        "bors/font-scada": "@dev"
    },
```

## Call from code
```php

class my_project_theme extends bors_themes_bootstrap3
{
	function pre_show()
	{
		B2\Font\Scada::load();
		return parent::pre_show();
	}
}
```

## Links

* http://www.scada.lv/company/scada-font
* https://www.google.com/fonts/specimen/Scada

## Require

* http://robloach.github.io/component-installer/
