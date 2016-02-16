<?php

use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Models\BalanceRequest;
use GalacticBank\Models\Balance;
use GalacticBank\Models\Audit;
use GalacticBank\Models\Character;
use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Classes\AuthAdminMiddleware;

/*
 * GET Route.
 */
$app->get('/admin/balance-request/{id}', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  if ($user->permission_level != 'Administrator') {
    header('Location: /');
    exit;
  }

  $requestID = $args['id'];
  if (!is_numeric($requestID) || !$requestID > 0) {
    return $this->view->render($response, 'admin-balance-request-review.php', [
      'error' => 'Unknown Request ID, ensure you have the correct URL.'
    ]);
  }

  $balanceRequest = BalanceRequest::where('BalanceRequest.id', $requestID)
                    ->join('Character', 'Character.id', '=', 'BalanceRequest.character_id')
                    ->select('BalanceRequest.*', 'Character.name')
                    ->first();

  if (!$balanceRequest) {
    return $this->view->render($response, 'admin-balance-request-review.php', [
      'error' => 'Invalid Balance ID, please ensure you have the correct URL.'
    ]);
  }

  return $this->view->render($response, 'admin-balance-request-review.php', [
    'balance_request' => $balanceRequest
  ]);

})->add(new AuthMiddleware)->add(new AuthAdminMiddleware);

/*
 * POST Route.
 */
$app->post('/admin/balance-request/{id}', function ($request, $response, $args) {

  $token     = Token::where('token', $_SESSION['login_token'])->first();
  $user      = User::where('id', $token->user_id)->first();

  $requestID = $args['id'];
  if (!is_numeric($requestID) || !$requestID > 0) {
    return $this->view->render($response, 'admin-balance-request-review.php', [
      'error' => 'Unknown Request ID, ensure you have the correct URL.'
    ]);
  }

  $balanceRequest = BalanceRequest::where('BalanceRequest.id', $requestID)
                    ->join('Character', 'Character.id', '=', 'BalanceRequest.character_id')
                    ->select('BalanceRequest.*', 'Character.name')
                    ->first();

  if (!$balanceRequest) {
    return $this->view->render($response, 'admin-balance-request-review.php', [
      'error' => 'Invalid Balance ID, please ensure you have the correct URL.'
    ]);
  }

  $accepted  = ($_POST['accepted'] == 'accepted') ? 'Accepted' : 'Rejected';
  $reasoning = $_POST['decision_reasoning'];

  if (empty($reasoning)) {
    return $this->view->render($response, 'admin-balance-request-review.php', [
      'error' => 'Reasoning cannot be blank when submitting a review.'
    ]);
  }

    $character = Character::where('user_id', $balanceRequest->character_id)->first();

  $balanceRequest->update([
    'status' => $accepted,
    'decision_reasoning' => $reasoning,
    'completed' => 'Yes'
  ]);

  if ($balanceRequest->status === 'Accepted') {
    $balance = Balance::Create([
      'amount' => $balanceRequest->amount,
      'character_id' => $balanceRequest->character_id
    ]);

    Audit::Create([
      'category'   => 'Balance Review Accepted',
      'user_id'    => $user->id,
      'log_note'   => 'Balance review accepted for character ' . $character->name,
      'ip_address' => $_SERVER['REMOTE_ADDR']
    ]);
  }

  return $this->view->render($response, 'admin-balance-request-review.php', [
    'balance_request' => $balanceRequest
  ]);

})->add(new AuthMiddleware)->add(new AuthAdminMiddleware);
