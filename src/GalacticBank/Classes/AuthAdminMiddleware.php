<?php
/**
 * Auth Admin Middleware Class
 *
 * Class invokes a method which validates a standard admin authentication
 * level. It will return the user to the home page if they do not
 * have the relevant authentication level.
 *
 * @author Michael Leah <m.leah@outlook.com>
 */

namespace GalacticBank\Classes;

use GalacticBank\Models\Token;
use GalacticBank\Models\User;

class AuthAdminMiddleware
{
  public function __invoke($request, $response, $next)
  {
      $token = Token::where('token', $_SESSION['login_token'])->first();
      $user  = User::where('id', $token->user_id)->first();

      if ($user->permission_level !== 'Administrator') {
        header('Location: /');
        exit;
      }

      // Pass in the Routes Response body.
      $response = $next($request, $response);

      return $response;
  }
}
