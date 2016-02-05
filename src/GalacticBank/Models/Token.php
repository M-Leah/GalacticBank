<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Token extends Eloquent
{
  protected $table    = 'Token';
  protected $fillable = ['token', 'type', 'active', 'user_id'];

  /**
   * Returns a Unique Token
   *
   * @return String
   */
  public static function generateToken()
  {
    return sha1(uniqid());
  }

  /**
   * Validates an existing token in the database.
   *
   * @param  String  $token
   * @return boolean
   */
  public static function validateToken($token)
  {
    $record = Token::where('token', $token)->first();
    return !is_null($record) && $record->active == 'Yes';
  }
}
