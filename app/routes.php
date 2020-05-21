<?php
declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

use App\Application\Actions\Example\ExampleAction;

return function (App $app) {
    
    $app->get('/', ExampleAction::class)->setName('home');


    /**
     * To group routes use this
     */
    // $app->group('/users', function (Group $group) {
    //     $group->get(/{id:[0-9]+}, '')
    // });
    
    // $app->options('/{routes:.*}', function (Request $request, Response $response) {
    //     // CORS Pre-Flight OPTIONS Request Handler

    //     return $response;
    // });
};