<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Audit;
use GalacticBank\Models\Token;

/*
 * TODO: Add protection against brute force via audit log.
 */

$app->get('/login', function ($request, $response, $args) {

  // TODO: Extract Login Check to a method.
  if (isset($_SESSION['login_token'])) {
    $token = Token::validateToken($_SESSION['login_token']);
    if ($token === true) {
      header('Location: /');
      exit;
    }
  }

  return $this->view->render($response, 'login.php', []);
});


$app->post('/login', function ($request, $response, $args) {

  $username = $_POST['username'] ?: '';
  $password = $_POST['password'] ?: '';

  $user = User::where('username', $username)->first();

  // Ensure the user exists in our records.
  if (is_null($user)) {
    return $this->view->render($response, 'login.php', [
      'error' => 'Invalid Username or password.'
    ]);
  }

  // Ensure the passwords match to validate the user.
  if (!password_verify($password, $user->password)) {

    Audit::create([
      'category'   => 'Failed login attempt',
      'log_note'   => 'Invalid credentials attempted for account: ' . $username,
      'user_id'    => $user->id,
      'ip_address' => $_SERVER['REMOTE_ADDR']
    ]);

    return $this->view->render($response, 'login.php', [
      'error' => 'Invalid Username or password.'
    ]);
  }

  // TODO: Check for any currently active token, de-activate token if exists.

  // Log the user in.
  $token = Token::generateToken();
  Token::create([
    'token'  => $token,
    'type'    => 'Login Token',
    'active'  => 'Yes',
    'user_id' => $user->id
  ]);

  $_SESSION['login_token'] = $token;

  Audit::create([
    'category'   => 'Successful Login',
    'log_note'   => 'User successfully logged in for account: ' . $username,
    'user_id'    => $user->id,
    'ip_address' => $_SERVER['REMOTE_ADDR']
  ]);

  header('Location: /');
  exit;

});
