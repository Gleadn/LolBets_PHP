<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'gesdinet_jwt_refresh_token' => [[], [], [], [['text', '/api/token/refresh']], [], [], []],
    'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], [], []],
    'bets.getAll' => [[], ['_controller' => 'App\\Controller\\BetsController::getAllBets'], [], [['text', '/api/bets']], [], [], []],
    'bets.get' => [['bet'], ['_controller' => 'App\\Controller\\BetsController::getBet'], [], [['variable', '/', '[^/]++', 'bet', true], ['text', '/api/bets']], [], [], []],
    'bets.post' => [[], ['_controller' => 'App\\Controller\\BetsController::createBet'], [], [['text', '/api/bets']], [], [], []],
    'bets.put' => [['bet'], ['_controller' => 'App\\Controller\\BetsController::updateBet'], [], [['variable', '/', '[^/]++', 'bet', true], ['text', '/api/bets']], [], [], []],
    'bets.softDelete' => [['bet'], ['_controller' => 'App\\Controller\\BetsController::softDeleteBets'], [], [['variable', '/', '[^/]++', 'bet', true], ['text', '/api/bets']], [], [], []],
    'matchs.getAll' => [[], ['_controller' => 'App\\Controller\\MatchsController::getAllMatchs'], [], [['text', '/api/matchs']], [], [], []],
    'matchs.get' => [['match'], ['_controller' => 'App\\Controller\\MatchsController::getMatch'], [], [['variable', '/', '[^/]++', 'match', true], ['text', '/api/matchs']], [], [], []],
    'matchs.randomPut' => [[], ['_controller' => 'App\\Controller\\MatchsController::simulateMatchs'], [], [['text', '/api/matchs/play']], [], [], []],
    'matchs.put' => [['match'], ['_controller' => 'App\\Controller\\MatchsController::simulateSingleMatch'], [], [['variable', '/', '[^/]++', 'match', true], ['text', '/api/matchs/play']], [], [], []],
];
