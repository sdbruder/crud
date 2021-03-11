<?php

namespace Sdbruder\Crud;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sdbruder\Crud\Crud
 */
class CrudFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'crud';
    }
}
