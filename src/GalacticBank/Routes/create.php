<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;

$app->get('/character/create', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  return $this->view->render($response, 'create.php', []);
});

$app->post('/character/create', function ($request, $response, $args) {

  $name    = isset($_POST['name']) ? $_POST['name'] : ''; //TODO: Validation on name, no special chars, Unique, etc.
  $faction = isset($_POST['faction']) ? $_POST['faction'] : '';

  $allowedFactions = ['Jedi', 'Sith', 'Other'];
  if (!in_array($faction, $allowedFactions)) {
    // TODO: Error
  }

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $character = Character::create([
    'name'    => $name,
    'faction' => $faction,
    'user_id' => $user->id
  ]);

  return $this->view->render($response, 'create.php', ['success' => 'Character successfully created.']);
});
