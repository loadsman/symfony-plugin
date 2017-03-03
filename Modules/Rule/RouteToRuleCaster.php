<?php

namespace Loadsman\SymfonyPlugin\Modules\Rule;

use Loadsman\PHP\DTO\Rule;
use Symfony\Component\Routing\Route;

class RouteToRuleCaster
{
    /**
     * @param Route $route
     * @return Rule
     */
    public function cast(Route $route, $name){
        $rule = new Rule();
        $rule->setName($name);
        $rule->setUri($route->getPath());
        $rule->setMethods($route->getMethods());
        $rule->setRouter('Symfony');

        return $rule;
    }
}