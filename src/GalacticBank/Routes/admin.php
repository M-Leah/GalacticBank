<?php
use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\BalanceRequest;

$app->get('/admin', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  if ($user->permission_level != 'Administrator') {
    header('Location: /');
    exit;
  }

  $this->view->render($response, 'admin-panel.php', []);
});

$app->get('/admin/pending-requests', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  if ($user->permission_level != 'Administrator') {
    header('Location: /');
    exit;
  }

  // Pull out all balance requests.
  $pendingRequests   = BalanceRequest::where('status', 'Pending')
                          ->join('Character', 'Character.id', '=', 'BalanceRequest.character_id')
                          ->orderBy('BalanceRequest.created_at', 'desc')
                          ->get();

  $completedRequests = BalanceRequest::where('completed', 'Yes')
                          ->join('Character', 'Character.id', '=', 'BalanceRequest.character_id')
                          ->orderBy('BalanceRequest.created_at', 'desc')
                          ->get();

  $this->view->render($response, 'pending-requests.php', [
    'pending_requests' => $pendingRequests,
    'completed_requests' => $completedRequests
  ]);

});
