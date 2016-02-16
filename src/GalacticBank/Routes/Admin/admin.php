<?php

use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Classes\AuthAdminMiddleware;
use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\BalanceRequest;

$app->get('/admin', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $this->view->render($response, 'admin-panel.php', []);

})->add(new AuthMiddleware)->add(new AuthAdminMiddleware);
