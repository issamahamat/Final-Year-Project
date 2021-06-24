<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public function Post(){

    return $this->hasMany("App/Post");
  }

    public function User(){

    return $this->hasMany("App/user");
  }
}
