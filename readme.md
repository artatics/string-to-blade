String Blade Compiler for Laravel
===

This package generates and returns a compiled view from string for Laravel.

Requirements
---

 - Laravel 5.6+
 - PHP 7.1+

### Installation
Add repository

```json
"repositories": [
    {
        "type": "git",
        "url": "ssh://git@lab.systembox.org:2022/systems/chekonline.git"
    }
],
```

and to require section

```json
"require": {
  "artatics/string-to-blade": "1.*"
}
```

Run `composer update` afterwards.

Or just execute the following command
```
composer require artatics/string-to-blade
```

### Initialization
Add provider `config/app.php`

```php
<?php

return [
    'providers' => [
        ...
        artatics\StringToBlade\StringToBladeServiceProvider::class,
        ...
    ],
];
```

### Using
Make new controller `app/Http/Controllers/BladeController.php`

```php
<?php

namespace App\Http\Controllers;

use artatics\StringToBlade\interfaces\StringToBlade;

class BladeController extends Controller
{
    public function compiling(StringToBlade $blade)
    {
        $string = '@if ($foo == "Bar") foo is Bar @else foo is not Bar @endif';
        $params = ['foo' => 'Bar'];
        return $blade->compileWiths($string, $params);
    }
}
```

Add new route `routes/web.php`

```php
Route::get('/test', 'BladeController@compiling');
```
### License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)