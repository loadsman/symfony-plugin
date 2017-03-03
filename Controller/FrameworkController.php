<?php

namespace Loadsman\SymfonyPlugin\Controller;

use Loadsman\PHP\DTO\Framework;
use Loadsman\PHP\DTO\Rule;
use Loadsman\PHP\Transformers\FrameworkTransformer;
use Loadsman\PHP\Transformers\RuleTransformer;
use Loadsman\SymfonyPlugin\Modules\Rule\RuleRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

class FrameworkController extends Controller
{
    /**
     * @Route("/loadsman/framework/get-data", name="loadsman_get_framework_data")
     * @Method({"GET", "POST"})
     */
    public function getFrameworkInfo()
    {
        $framework = new Framework('Symfony Framework', \Symfony\Component\HttpKernel\Kernel::VERSION);

        $frameworkData = (new FrameworkTransformer())->transform($framework);

        $responseData = (new \Loadsman\PHP\Http\Response($frameworkData))->toArray();

        return new JsonResponse($responseData);
    }

    /**
     * @Route("/loadsman/rules/get-many", name="loadsman_get_many_rules")
     * @Method({"GET", "POST"})
     */
    public function getRoutes()
    {
        $rules = (new RuleRepository($this->get('router')))->getAllRules();

        $transformer = new RuleTransformer();

        $rulesData = array_map(function (Rule $rule) use ($transformer) {
            return $transformer->transform($rule);
        }, $rules);

        $responseData = (new \Loadsman\PHP\Http\Response($rulesData))->toArray();

        return new JsonResponse($responseData);
    }
}