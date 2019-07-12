<?php
namespace Cheanizer\DocTemplate;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor() { 
        return 'doc-template';
    }
}