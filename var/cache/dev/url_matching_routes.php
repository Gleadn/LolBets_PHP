<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/token/refresh' => [
            [['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null],
            [['_route' => 'api_refresh_token'], null, null, null, false, false, null],
        ],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/bets' => [
            [['_route' => 'bets.getAll', '_controller' => 'App\\Controller\\BetsController::getAllBets'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'bets.post', '_controller' => 'App\\Controller\\BetsController::createBet'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/matchs' => [[['_route' => 'matchs.getAll', '_controller' => 'App\\Controller\\MatchsController::getAllMatchs'], null, ['GET' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|bets/([^/]++)(?'
                        .'|(*:66)'
                    .')'
                    .'|matchs/(?'
                        .'|([^/]++)(*:92)'
                        .'|play(?'
                            .'|(*:106)'
                            .'|/([^/]++)(*:123)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [
            [['_route' => 'bets.get', '_controller' => 'App\\Controller\\BetsController::getBet'], ['bet'], ['GET' => 0], null, false, true, null],
            [['_route' => 'bets.put', '_controller' => 'App\\Controller\\BetsController::updateBet'], ['bet'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'bets.softDelete', '_controller' => 'App\\Controller\\BetsController::softDeleteBets'], ['bet'], ['DELETE' => 0], null, false, true, null],
        ],
        92 => [[['_route' => 'matchs.get', '_controller' => 'App\\Controller\\MatchsController::getMatch'], ['match'], ['GET' => 0], null, false, true, null]],
        106 => [[['_route' => 'matchs.randomPut', '_controller' => 'App\\Controller\\MatchsController::simulateMatchs'], [], ['PUT' => 0], null, false, false, null]],
        123 => [
            [['_route' => 'matchs.put', '_controller' => 'App\\Controller\\MatchsController::simulateSingleMatch'], ['match'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
