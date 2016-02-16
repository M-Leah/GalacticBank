<?php

use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Models\BalanceRequest;
use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Classes\AuthAdminMiddleware;

$app->get('/admin/balance-requests', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  if ($user->permission_level != 'Administrator') {
    header('Location: /');
    exit;
  }

  // Pull out all balance requests.
  $pendingRequests   = BalanceRequest::where('status', 'Pending')
                          ->join('Character', 'Character.id', '=', 'BalanceRequest.character_id')
                          ->select('Character.name', 'BalanceRequest.*')
                          ->orderBy('BalanceRequest.created_at', 'desc')
                          ->get();

  $completedRequests = BalanceRequest::where('completed', 'Yes')
                          ->join('Character', 'Character.id', '=', 'BalanceRequest.character_id')
                          ->select('Character.name', 'BalanceRequest.*')
                          ->orderBy('BalanceRequest.created_at', 'desc')
                          ->get();

  $this->view->render($response, 'admin-balance-requests.php', [
    'pending_requests' => $pendingRequests,
    'completed_requests' => $completedRequests
  ]);

})->add(new AuthMiddleware)->add(new AuthAdminMiddleware);
