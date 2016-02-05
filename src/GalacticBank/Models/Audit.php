<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Audit extends Eloquent
{
  protected $table    = 'Audit';
  protected $fillable = ['category', 'user_id', 'log_note' , 'ip_address'];
}
