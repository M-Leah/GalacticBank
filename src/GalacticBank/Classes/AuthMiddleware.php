<?php
/**
 * Auth Middleware Class
 *
 * Class invokes a method which validates a standard users authentication
 * level. It will return the user to the login page if they do not
 * have the relevant authentication level.
 *
 * @author Michael Leah <m.leah@outlook.com>
 */

namespace GalacticBank\Classes;

use GalacticBank\Models\Token;

class AuthMiddleware
{
  public function __invoke($request, $response, $next)
  {
      $token = Token::validateToken($_SESSION['login_token']);
      if ($token === false || is_null($token)) {
        header('Location: /login');
        exit;
      }

      $token = Token::where('token', $_SESSION['login_token'])->first();

      // Pass in the Routes Response body.
      $response = $next($request, $response);

      return $response;
  }
}
