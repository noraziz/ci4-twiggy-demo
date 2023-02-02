# CI4-Twiggy-Demo

This demo project is built using [ci4-twiggy](https://github.com/noraziz/ci4-twiggy) library.

Our [wiki](https://github.com/noraziz/ci4-twiggy/wiki) is coming soon.

As always, sorry for my bad English :)

## Requirements

* PHP 7.3 or later
* CodeIgniter 4.2 or later
* Twig 3.3.8 or later

## Installation

### Getting source code

1. Clone github project.

~~~
$ git clone https://github.com/noraziz/ci4-twiggy-demo
~~~

2. Download compressed archive, using CODE button or select from relesed version, and then extract it. This project file is under a directory.

### Complete setup

Run `composer install` to download project requirements.

### Set codeigniter-4 environment

Always remember to setting `.env` file.

~~~
app.baseURL = 'http://localhost/public/'
~~~

## Usage

### Directory Structure

	```
    +-app/
    | +-Config/
    | +-Controllers/
    | | +-Home.php
	| ..
	| +-Themes/
	|   +-default/
	|     +-_layouts/
	|     | +-layout_default.html.twig
	|     +-page_index.html.twig
	|
    +-Modules/
      +-Home/
	    +-Controllers/
	    | +-Cekidot.php
	    ..
        +-Themes/
          +-default/
            +-_layouts/
	        | +- layout_model_1.html.twig
	        +-page_home.html.twig
	```

### Controllers

This demo project using 2 controllers.

First controller is located in the root app folder, called `Home Controller`. This controller contains `tw1()` method. Inside `tw1` we will display `page_index.html.twig` template based on `_layouts\layout_default.html.twig` layout.
```php
public function tw1()
{
	$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
	$this->twiggy->init(__CLASS__);
	$this->twiggy->title('Hello World on App');
	$this->twiggy->layout('layout_default')->template('page_index')->display();
}
```

As described on library page, call `init(__CLASS__)` after twiggy library creation.

Open browser, type url:
```
http://localhost/tw1
```

The second controller is located inside Home Module `Modules/Home`, called `Cekidot Controller`, which is contain `ccb()` method. This method is intended to display `page_home.html.twig` template using layout `_layouts\layout_model_1.html.twig`.
```php
public function ccb()
{
	//echo __CLASS__;

	$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
	$this->twiggy->init(__CLASS__);
	$this->twiggy->title('Hello World on Home Module');
	$this->twiggy->layout('layout_model_1')->template('page_home')->display();
}
```

And then open browser, type url:
```
http://localhost/ccb
```

NOTE: this demo project using theme `default`. You may change by editing file `Config/Twiggy.php` on package folder. Or, by using code `$this->twiggy->theme('your_theme_name')`


### Working with Variable

For some conditions, we want a dynamic twig template which is allowing variables passed from controller. Use `$twiggy->set()` method inside your code before calling `render` or `display` statement.

```php
/**
 * Set data
 * 
 * @access	public
 * @param 	mixed  	key (variable name) or an array of variable names with values
 * @param 	mixed  	data
 * @param 	boolean	(optional) is this a global variable?
 * @return	object 	instance of this class
 */
public function set($key, $value = NULL, $global = FALSE)
```

Example:

PHP Code, inside controller's method.
```php
$this->twiggy->set('var_1', 'hello');
```

Twig Template
```twig
This <b>var_1</b> variable contain {{ var_1 }}.
```
 
