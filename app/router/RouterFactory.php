<?php

namespace App;

use Nette;


class RouterFactory
{
    /**
    * @return Nette\Application\IRouter
    */
    public static function createRouter()
    {
        $router = new \Nette\Application\Routers\SimpleRouter('FinStatements:default');
        return $router;
    }
}
