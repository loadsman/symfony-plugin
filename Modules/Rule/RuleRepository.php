<?php

namespace Loadsman\SymfonyPlugin\Modules\Rule;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Router;

class RuleRepository
{
    /**
     * @var Router
     */
    private $router;

    /**
     * @var RouteToRuleCaster
     */
    private $caster;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->caster = new RouteToRuleCaster();
    }

    /**
     * @return Array<\Loadsman\PHP\DAO\Rule>
     */
    public function getAllRules()
    {
        $routes = $this->router->getRouteCollection()->all();

        $rules = [];
        foreach ($routes as $name => $route) {
            // Name is weirdly stored as key.
            $rules[] = $this->caster->cast($route, $name);
        }

        return $rules;
    }
}