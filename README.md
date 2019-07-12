# Description

DocTemplate is a Laravel library for generate doc file using .rtf file easily. Simply add .rtf file from msword and use it for template like we use blade template. 

The main feature is replacing string using .rtf file. 


## Installation

use Composer to install DocTemplate

```bash
composer require cheanizer/laravel-doc-template
```

dont forget to register package to L4 users. 

```php
 'providers' => [
        ...
        Cheanizer\DocTemplate\DocTemplateServiceProvider::class,
        ...
]
```


## Usage

```php

DocTemplate::template(storage_path('app/public/template.rtf'))
            ->with(['total' => '80.000.000'])
            ->save(storage_path('testing-' . time() . '.doc'));
```

## Todo

- Add direct download with header. 
- Add iteration functionality inside the template. 

## Credit
This package is inpired by another same functionality library [laravel-word-template](https://github.com/novay/laravel-word-template)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
